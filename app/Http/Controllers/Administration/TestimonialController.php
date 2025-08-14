<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TestimonialController extends Controller
{
    /**
     * Display a listing of testimonials.
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('administration.testimonial', compact('testimonials'));
    }

    /**
     * Store a newly created testimonial.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'testimonial' => 'required|string',
            'title'       => 'required|string|max:255',
            'subtitle'    => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'errors' => $validator->errors()], 422);
        }

        $testimonial = Testimonial::create($request->only(['testimonial', 'title', 'subtitle']));
        $newRow = view('administration.partials.testimonial-row', compact('testimonial'))->render();

        return response()->json([
            'status'  => 'success',
            'newRow'  => $newRow,
        ]);
    }

    /**
     * Update the specified testimonial.
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id'          => 'required|exists:testimonials,id',
            'testimonial' => 'required|string',
            'title'       => 'required|string|max:255',
            'subtitle'    => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'errors' => $validator->errors()], 422);
        }

        $testimonial = Testimonial::findOrFail($request->id);
        $testimonial->update($request->only(['testimonial', 'title', 'subtitle']));
        $updatedRow = view('administration.partials.testimonial-row', compact('testimonial'))->render();

        return response()->json([
            'status'         => 'success',
            'updatedRow'     => $updatedRow,
            'testimonialId'  => $testimonial->id,
        ]);
    }

    /**
     * Remove the specified testimonial.
     */
    public function destroy(Request $request)
    {
        $testimonial = Testimonial::findOrFail($request->id);
        $testimonial->delete();

        return response()->json([
            'status'         => 'success',
            'testimonialId'  => $testimonial->id,
        ]);
    }
}
