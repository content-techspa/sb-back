<?php 

namespace App\Http\Controllers;

use App\Models\GalleryCategory;
use App\Models\GalleryImage;
use Illuminate\Http\Request;

class GalleryImageController extends Controller
{
    public function index(GalleryCategory $category)
    {
        $images = $category->images;
        return view('admin.gallery_images', compact('category', 'images'));
    }

    public function upload(Request $request, GalleryCategory $category)
    {
        try {
            $request->validate([
                'images.*' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $uploadedImages = [];

            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('gallery_images', 'public');

                $galleryImage = GalleryImage::create([
                    'category_id' => $category->id,
                    'image_path' => $imagePath,
                ]);

                $uploadedImages[] = $galleryImage;
            }

            return response()->json([
                'success' => true,
                'message' => 'Images uploaded successfully!',
                'images' => $uploadedImages,
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Return validation error
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 422);
        } catch (\Exception $e) {
            // Return general error
            return response()->json([
                'success' => false,
                'message' => 'An error occurred during upload: ' . $e->getMessage(),
            ], 500);
        }
    }


    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:gallery_images,id',
            'title' => 'nullable|string|max:255',
        ]);

        $image = GalleryImage::findOrFail($request->id);
        $image->title = $request->title;
        $image->save();

        return response()->json(['success' => true, 'message' => 'Image updated successfully!', 'data' => $image]);
    }

    public function delete(Request $request)
    {
        $request->validate(['id' => 'required|exists:gallery_images,id']);

        $image = GalleryImage::findOrFail($request->id);
        $image->delete();

        return response()->json(['success' => true, 'message' => 'Image deleted successfully!']);
    }
}
