<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Models\BlogTag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class BlogTagController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of blog tags (Admin).
     */
    public function index()
    {
        $tags = BlogTag::orderBy('id', 'desc')->get();
        return view('administration.blog_tags.index', compact('tags'));
    }

    /**
     * Store a newly created tag.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:191',
            'description' => 'nullable|string|max:191',
            'status'      => ['required', Rule::in([1,2])],
        ]);

        // Generate slug
        $slugBase = Str::slug($request->name);
        $slug     = $slugBase;
        $counter  = 1;
        while (BlogTag::where('slug', $slug)->exists()) {
            $slug = $slugBase . '-' . $counter++;
        }

        $tag = BlogTag::create([
            'name'        => $request->name,
            'slug'        => $slug,
            'description' => $request->description,
            'status'      => $request->status,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Tag created successfully.',
            'data'    => $tag,
        ]);
    }

    /**
     * Update the specified tag.
     */
    public function update(Request $request, BlogTag $tag)
    {
        $request->validate([
            'name'        => 'required|string|max:191',
            'description' => 'nullable|string|max:191',
            'status'      => ['required', Rule::in([1,2])],
        ]);

        $tag->name        = $request->name;
        $tag->description = $request->description;
        $tag->status      = $request->status;

        // Regenerate slug if name changed
        if ($tag->isDirty('name')) {
            $slugBase = Str::slug($request->name);
            $slug     = $slugBase;
            $counter  = 1;
            while (BlogTag::where('slug', $slug)->where('id', '!=', $tag->id)->exists()) {
                $slug = $slugBase . '-' . $counter++;
            }
            $tag->slug = $slug;
        }

        $tag->save();

        return response()->json([
            'success' => true,
            'message' => 'Tag updated successfully.',
            'data'    => $tag,
        ]);
    }

    /**
     * Remove the specified tag from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->input('id');
        $tag = BlogTag::findOrFail($id);
        $tag->delete();

        return response()->json([
            'success' => true,
            'message' => 'Tag deleted successfully.',
            'data'    => ['id' => $id],
        ]);
    }
}
