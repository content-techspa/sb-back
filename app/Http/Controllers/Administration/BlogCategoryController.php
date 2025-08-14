<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of blog categories (Admin).
     */
    public function index()
    {
        $categories = BlogCategory::orderBy('id', 'desc')->get();
        return view('administration.blog_categories.index', compact('categories'));
    }

    /**
     * Store a newly created category.
     */
    public function store(Request $request)
    {
        // 1) Validate all fields except `link` (we’ll generate it)
        $data = $request->validate([
            'name'           => 'required|string|max:255',
            'parent'         => 'nullable|integer|min:0',
            'description'    => 'nullable|string',
            'visible_status' => 'required|in:1,2',
            'image'          => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            // no 'link' here
        ]);

        // 2) If parent > 0, ensure it exists
        $parentId = $data['parent'] ?? 0;
        if ($parentId > 0) {
            $parentExists = BlogCategory::where('id', $parentId)->exists();
            if (! $parentExists) {
                return response()->json([
                    'success' => false,
                    'message' => 'The selected parent is invalid.',
                ], 422);
            }
        }

        // 3) Upload category image if provided
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('category_images', 'public');
        }

        // 4) Generate a unique slug
        $slugBase = Str::slug($data['name']);
        $slug     = $slugBase;
        $counter  = 1;
        while (BlogCategory::where('slug', $slug)->exists()) {
            $slug = $slugBase . '-' . $counter++;
        }

        // 5) Build the auto-generated link using that slug
        //    (adjust the URL structure to whatever your frontend uses)
        $link = url("/blog/category/{$slug}");

        // 6) Create the category record
        $category = BlogCategory::create([
            'name'           => $data['name'],
            'slug'           => $slug,
            'parent'         => $parentId,
            'description'    => $data['description'] ?? null,
            'visible_status' => $data['visible_status'],
            'image'          => $imagePath,
            'link'           => $link, // auto-generated
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Category created successfully.',
            'data'    => $category,
        ]);
    }

    /**
     * Update the specified category.
     */
    public function update(Request $request, BlogCategory $category)
    {
        // 1) Validate all fields except `link`
        $data = $request->validate([
            'name'           => 'required|string|max:255',
            'parent'         => 'nullable|integer|min:0',
            'description'    => 'nullable|string',
            'visible_status' => 'required|in:1,2',
            'image'          => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            // no 'link'
        ]);

        // 2) If parent > 0, ensure it exists (and isn’t itself)
        $parentId = $data['parent'] ?? 0;
        if ($parentId > 0) {
            if ($parentId == $category->id) {
                return response()->json([
                    'success' => false,
                    'message' => 'A category cannot be its own parent.',
                ], 422);
            }
            $parentExists = BlogCategory::where('id', $parentId)->exists();
            if (! $parentExists) {
                return response()->json([
                    'success' => false,
                    'message' => 'The selected parent is invalid.',
                ], 422);
            }
        }

        // 3) Update basic fields
        $category->name           = $data['name'];
        $category->parent         = $parentId;
        $category->description    = $data['description'] ?? null;
        $category->visible_status = $data['visible_status'];

        // 4) If name changed, regenerate slug (and link)
        if ($category->isDirty('name')) {
            $slugBase = Str::slug($data['name']);
            $slug     = $slugBase;
            $counter  = 1;
            while (BlogCategory::where('slug', $slug)->where('id', '!=', $category->id)->exists()) {
                $slug = $slugBase . '-' . $counter++;
            }
            $category->slug = $slug;

            // Update the auto-generated link to match new slug
            $category->link = url("/blog/category/{$slug}");
        }

        // 5) Handle image replacement
        if ($request->hasFile('image')) {
            if ($category->image && Storage::disk('public')->exists($category->image)) {
                Storage::disk('public')->delete($category->image);
            }
            $category->image = $request->file('image')->store('category_images', 'public');
        }

        $category->save();

        return response()->json([
            'success' => true,
            'message' => 'Category updated successfully.',
            'data'    => $category,
        ]);
    }

    /**
     * Remove the specified category from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->input('id');
        $category = BlogCategory::findOrFail($id);

        // Delete image if exists
        if ($category->image && Storage::disk('public')->exists($category->image)) {
            Storage::disk('public')->delete($category->image);
        }

        $category->delete();

        return response()->json([
            'success' => true,
            'message' => 'Category deleted successfully.',
            'data'    => ['id' => $id],
        ]);
    }
}
