<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Models\State;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $states    = State::with('country')->orderBy('name')->get();
        $countries = Country::orderBy('name')->get();
        return view('administration.states', compact('states','countries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'country_id' => ['required', Rule::exists('countries','id')],
        ]);

        $state = State::create($request->only('name','country_id'));

        return response()->json([
            'success' => true,
            'message' => 'State created.',
            'data'    => $state->load('country'),
        ]);
    }

    public function update(Request $request, State $state)
    {
        $request->validate([
            'name'       => ['required','string','max:255',
                Rule::unique('states','name')
                    ->where(fn($q)=> $q->where('country_id',$request->country_id))
                    ->ignore($state->id)
            ],
            'country_id' => ['required', Rule::exists('countries','id')],
        ]);

        $state->update($request->only('name','country_id'));

        return response()->json([
            'success' => true,
            'message' => 'State updated.',
            'data'    => $state->load('country'),
        ]);
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        State::findOrFail($id)->delete();

        return response()->json([
            'success' => true,
            'message' => 'State deleted.',
            'data'    => ['id'=>$id],
        ]);
    }
}
