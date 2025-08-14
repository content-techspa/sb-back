<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CountryController extends Controller
{
    public function __construct()
    {
        // Ensure only authenticated admins can hit these endpoints
        $this->middleware('auth');
    }

    /**
     * List all countries (with optional related states count).
     */
    public function index()
    {
        // Eager‐load states count if you want, or just load all countries.
        $countries = Country::withCount('states')
                            ->orderBy('name', 'asc')
                            ->get();

        return view('administration.countries', compact('countries'));
    }

    /**
     * Store a new country.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:255|unique:countries,name',
            'iso_code'  => 'nullable|string|max:10|unique:countries,iso_code',
        ]);

        $country = Country::create([
            'name'     => $request->name,
            'iso_code' => $request->iso_code,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Country created successfully.',
            'data'    => $country,
        ]);
    }

    /**
     * Update an existing country.
     */
    public function update(Request $request, Country $country)
    {
        $request->validate([
            'name'     => ['required','string','max:255', Rule::unique('countries','name')->ignore($country->id)],
            'iso_code' => ['nullable','string','max:10', Rule::unique('countries','iso_code')->ignore($country->id)],
        ]);

        $country->name = $request->name;
        $country->iso_code = $request->iso_code;
        $country->save();

        return response()->json([
            'success' => true,
            'message' => 'Country updated successfully.',
            'data'    => $country,
        ]);
    }

    /**
     * Delete a country (and cascade delete its states & cities via DB foreign keys).
     */
    public function destroy(Request $request)
    {
        $id = $request->input('id');
        $country = Country::findOrFail($id);
        $country->delete();

        return response()->json([
            'success' => true,
            'message' => 'Country deleted successfully.',
            'data'    => ['id' => $id],
        ]);
    }
}
