<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    /**
     * Display a listing of sliders.
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('administration.slider', compact('sliders'));
    }

    /**
     * Update the specified slider.
     */
    public function update(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'id'           => 'required|exists:sliders,id',
            'title'        => 'required|string|max:255',
            'description'  => 'nullable|string',
            'button_text'  => 'nullable|string|max:255',
            'button_link'  => 'nullable|string|max:255',
            'image'        => 'nullable|image|mimes:jpeg,webp,png,jpg,gif,svg|max:2048',
            'image_alt'    => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'errors' => $validator->errors()], 422);
        }

        $slider = Slider::findOrFail($request->id);
        $slider->title       = $request->title;
        $slider->description = $request->description;
        $slider->button_text = $request->button_text;
        $slider->button_link = $request->button_link;
        $slider->image_alt   = $request->image_alt;

        // Process new image if provided
        if ($request->hasFile('image')) {
            // Optionally delete the old image if needed
            if ($slider->image && Storage::disk('public')->exists($slider->image)) {
                Storage::disk('public')->delete($slider->image);
            }
            $slider->image = $request->file('image')->store('sliders', 'public');
        }

        $slider->save();

        // Render a new table row for the updated slider (create a partial view for this)
        $updatedRow = view('administration.partials.slider-row', compact('slider'))->render();

        return response()->json([
            'status'    => 'success',
            'updatedRow'=> $updatedRow,
            'sliderId'  => $slider->id,
        ]);
    }
}
