<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Models\HomeProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminHomeProgramController extends Controller
{
    /**
     * Display a listing of home programs.
     */
    public function index()
    {
        $programs = HomeProgram::orderBy('created_at', 'desc')->get();
        return view('administration.homeprograms', compact('programs'));
    }

    /**
     * Store a newly created home program.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'rating'      => 'required|numeric|min:0|max:5',
            'totalReviews'=> 'required|integer|min:0',
            'thumbnail'   => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'errors' => $validator->errors()], 422);
        }

        $data = $validator->validated();

        // Process thumbnail upload if provided.
        if ($request->hasFile('thumbnail')) {
            // Store file in public/home_programs and get the path.
            $data['thumbnail'] = $request->file('thumbnail')->store('home_programs', 'public');
        } else {
            // Set a default image path if needed.
            $data['thumbnail'] = 'home_programs/default-thumbnail.png';
        }

        $program = HomeProgram::create($data);

        // Render a new table row (create a partial view for this).
        $newRow = view('administration.partials.homeprogram-row', compact('program'))->render();

        return response()->json([
            'status'  => 'success',
            'newRow'  => $newRow,
            'message' => 'Home Program added successfully.'
        ]);
    }

    /**
     * Update the specified home program.
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id'          => 'required|exists:home_programs,id',
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'rating'      => 'required|numeric|min:0|max:5',
            'totalReviews'=> 'required|integer|min:0',
            'thumbnail'   => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'errors' => $validator->errors()], 422);
        }

        $program = HomeProgram::findOrFail($request->id);
        $data = $validator->validated();

        // Process thumbnail upload if provided.
        if ($request->hasFile('thumbnail')) {
            // Optionally, delete old image if needed:
            if ($program->thumbnail && Storage::disk('public')->exists($program->thumbnail)) {
                Storage::disk('public')->delete($program->thumbnail);
            }
            $data['thumbnail'] = $request->file('thumbnail')->store('home_programs', 'public');
        }

        $program->update($data);

        $updatedRow = view('administration.partials.homeprogram-row', compact('program'))->render();

        return response()->json([
            'status'     => 'success',
            'updatedRow' => $updatedRow,
            'programId'  => $program->id,
            'message'    => 'Home Program updated successfully.'
        ]);
    }

    /**
     * Remove the specified home program from storage.
     */
    public function destroy(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:home_programs,id'
        ]);

        $program = HomeProgram::findOrFail($request->id);
        $program->delete();

        return response()->json([
            'status'    => 'success',
            'programId' => $program->id,
            'message'   => 'Home Program deleted successfully.'
        ]);
    }
}
