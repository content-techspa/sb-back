<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminEnquiryController extends Controller
{
    /**
     * Display a listing of enquiries.
     */
    public function index()
    {
        $enquiries = Enquiry::orderBy('created_at', 'desc')->get();
        return view('administration.enquiries', compact('enquiries'));
    }

    /**
     * Remove the specified enquiry from storage.
     */
    public function destroy(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:enquiries,id'
        ]);

        $enquiry = Enquiry::findOrFail($request->id);
        $enquiry->delete();

        return response()->json([
            'status'    => 'success',
            'enquiryId' => $enquiry->id,
            'message'   => 'Enquiry deleted successfully.'
        ]);
    }
    public function stats()
    {
        $totalEnquiries = Enquiry::count();

        $lastWeek = Carbon::now()->subWeek();
        $thisWeekEnquiries = Enquiry::where('created_at', '>=', $lastWeek)->count();

        $prevWeekStart = Carbon::now()->subWeeks(2);
        $prevWeekEnd = Carbon::now()->subWeek();
        $lastWeekEnquiries = Enquiry::whereBetween('created_at', [$prevWeekStart, $prevWeekEnd])->count();

        $change = 0;
        if ($lastWeekEnquiries > 0) {
            $change = (($thisWeekEnquiries - $lastWeekEnquiries) / $lastWeekEnquiries) * 100;
        }

        return response()->json([
            'total' => $totalEnquiries,
            'this_week' => $thisWeekEnquiries,
            'change' => round($change, 2),
            'direction' => $change >= 0 ? 'up' : 'down',
        ]);
    }
}
