<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminContactController extends Controller
{
    /**
     * Display a listing of contacts.
     */
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        return view('administration.contacts', compact('contacts'));
    }

    /**
     * Remove the specified contact from storage.
     */
    public function destroy(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:contacts,id'
        ]);

        $contact = Contact::findOrFail($request->id);
        $contact->delete();

        return response()->json([
            'status'    => 'success',
            'contactId' => $contact->id,
            'message'   => 'Contact deleted successfully.'
        ]);
    }


public function stats()
{
    $totalContacts = Contact::count();

    $lastWeek = Carbon::now()->subWeek();
    $contactsLastWeek = Contact::where('created_at', '>=', $lastWeek)->count();

    $prevWeekStart = Carbon::now()->subWeeks(2);
    $prevWeekEnd = Carbon::now()->subWeek();
    $contactsPrevWeek = Contact::whereBetween('created_at', [$prevWeekStart, $prevWeekEnd])->count();

    $percentChange = 0;
    if ($contactsPrevWeek > 0) {
        $percentChange = (($contactsLastWeek - $contactsPrevWeek) / $contactsPrevWeek) * 100;
    }

    return response()->json([
        'total' => $totalContacts,
        'last_week' => $contactsLastWeek,
        'change' => round($percentChange, 2),
        'direction' => $percentChange >= 0 ? 'up' : 'down',
    ]);
}
public function recentContacts()
{
    $contacts = Contact::latest()->take(10)->get();
    return response()->json($contacts);
}
}
