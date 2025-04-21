<?php 

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Models\GalleryCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryCategoryController extends Controller
{
    public function index()
    {
        $categories = GalleryCategory::all();
        return view('administration.gallerycategory', compact('categories'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'cover_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $imagePath = $request->file('cover_image')->store('gallery_categories', 'public');

            $category = GalleryCategory::create([
                'name' => $request->name,
                'cover_image' => $imagePath,
            ]);

            // Render the newly created row as HTML using the Blade partial
            $newRow = view('administration.partials.gallery-category-row', compact('category'))->render();

            return response()->json([
                'status'   => 'success',
                'message'  => 'Gallery category created successfully.',
                'newRow'   => $newRow,
                'data'     => $category
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'status'   => 'error',
                'message'  => 'Failed to create gallery category.',
                'data'     => ['error' => $e->getMessage()]
            ], 500);
        }
    }

    public function update(Request $request)
    {
        try {
            $request->validate([
                'id' => 'required|integer|exists:gallery_categories,id',
                'name' => 'required|string|max:255',
                'cover_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $category = GalleryCategory::findOrFail($request->id);

            // Update category name
            $category->name = $request->name;

            // Update cover image if provided
            if ($request->hasFile('cover_image')) {
                if (Storage::exists('public/' . $category->cover_image)) {
                    Storage::delete('public/' . $category->cover_image);
                }
                $category->cover_image = $request->file('cover_image')->store('gallery_categories', 'public');
            }

            $category->save();

            // Render the updated row as HTML using the Blade partial
            $updatedRow = view('administration.partials.gallery-category-row', compact('category'))->render();

            return response()->json([
                'status'     => 'success',
                'message'    => 'Gallery category updated successfully.',
                'updatedRow' => $updatedRow,
                'categoryId' => $category->id,
                'data'       => $category,
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status'   => 'error',
                'message'  => 'Failed to update gallery category.',
                'data'     => ['error' => $e->getMessage()]
            ], 500);
        }
    }

    public function destroy(Request $request)
    {
        try {
            $id = $request->input('id');
            $category = GalleryCategory::findOrFail($id);

            // Retrieve and delete all related images (assuming a relationship named 'images')
            $images = $category->images; 
            foreach ($images as $image) {
                if (Storage::exists('public/' . $image->path)) {
                    Storage::delete('public/' . $image->path);
                }
                $image->delete();
            }

            // Delete the cover image
            if (Storage::exists('public/' . $category->cover_image)) {
                Storage::delete('public/' . $category->cover_image);
            }

            // Delete the category itself
            $category->delete();

            return response()->json([
                'status'     => 'success',
                'message'    => 'Gallery category and associated images deleted successfully.',
                'categoryId' => $id
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status'   => 'error',
                'message'  => 'Failed to delete gallery category and associated images.',
                'data'     => ['error' => $e->getMessage()]
            ], 500);
        }
    }
}
