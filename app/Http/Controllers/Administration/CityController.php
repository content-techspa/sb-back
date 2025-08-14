<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cities = City::with('state.country')->orderBy('name')->get();
        $states = State::with('country')->orderBy('name')->get();
        return view('administration.cities', compact('cities','states'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'state_id' => ['required', Rule::exists('states','id')],
        ]);

        $city = City::create($request->only('name','state_id'));

        return response()->json([
            'success' => true,
            'message' => 'City created.',
            'data'    => $city->load('state.country'),
        ]);
    }

    public function update(Request $request, City $city)
    {
        $request->validate([
            'name'     => ['required','string','max:255',
                Rule::unique('cities','name')
                    ->where(fn($q)=> $q->where('state_id',$request->state_id))
                    ->ignore($city->id)
            ],
            'state_id' => ['required', Rule::exists('states','id')],
        ]);

        $city->update($request->only('name','state_id'));

        return response()->json([
            'success' => true,
            'message' => 'City updated.',
            'data'    => $city->load('state.country'),
        ]);
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        City::findOrFail($id)->delete();

        return response()->json([
            'success' => true,
            'message' => 'City deleted.',
            'data'    => ['id'=>$id],
        ]);
    }
}
