<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use App\Models\BlogComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class BlogController extends Controller
{
    public function __construct()
    {
        // Require auth on all admin endpoints
        $this->middleware('auth');
    }

    /**
     * Display a listing of blogs (Admin).
     */
    public function index()
    {
        $blogs = Blog::with(['category', 'tags'])->orderBy('id', 'desc')->get();
        $categories = BlogCategory::where('visible_status', 1)->get();
        $tags = BlogTag::where('status', 1)->get();

        return view('administration.blogs.index', compact('blogs', 'categories', 'tags'));
    }

    /**
     * Store a newly created blog in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'             => 'required|string|max:255',
            'small_description' => 'nullable|string|max:1000',
            'description'       => 'nullable|string',
            'featured_image'    => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'category_id'       => ['required', Rule::exists('blog_categories','id')],
            'tag_ids'           => 'nullable|array',
            'tag_ids.*'         => ['integer', Rule::exists('blog_tags','id')],
            'page_title'        => 'nullable|string|max:65535',
            'page_keyword'      => 'nullable|string',
            'page_description'  => 'nullable|string',
            'allow_comments'    => 'nullable|boolean',
            'visibility'        => ['required', Rule::in([1,2])],
        ]);

        // Upload featured image
        $featuredImagePath = $request->file('featured_image')->store('blog_images', 'public');

        // Create slug (ensure uniqueness)
        $slugBase = Str::slug($request->title);
        $slug     = $slugBase;
        $counter  = 1;
        while (Blog::where('slug', $slug)->exists()) {
            $slug = $slugBase . '-' . $counter++;
        }

        $blog = Blog::create([
            'title'             => $request->title,
            'slug'              => $slug,
            'small_description' => $request->small_description,
            'description'       => $request->description,
            'featured_image'    => $featuredImagePath,
            'category_id'       => $request->category_id,
            'page_title'        => $request->page_title,
            'page_keyword'      => $request->page_keyword,
            'page_description'  => $request->page_description,
            'allow_comments'    => $request->boolean('allow_comments', true),
            'visibility'        => $request->visibility,
        ]);

        // Attach tags (many‐to‐many)
        if ($request->filled('tag_ids')) {
            $blog->tags()->sync($request->tag_ids);
        }

        return response()->json([
            'success' => true,
            'message' => 'Blog created successfully.',
            'data'    => $blog->load(['category', 'tags']),
        ]);
    }

    /**
     * Update the specified blog in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title'             => 'required|string|max:255',
            'small_description' => 'nullable|string|max:1000',
            'description'       => 'nullable|string',
            'featured_image'    => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'category_id'       => ['required', Rule::exists('blog_categories','id')],
            'tag_ids'           => 'nullable|array',
            'tag_ids.*'         => ['integer', Rule::exists('blog_tags','id')],
            'page_title'        => 'nullable|string|max:65535',
            'page_keyword'      => 'nullable|string',
            'page_description'  => 'nullable|string',
            'allow_comments'    => 'nullable|boolean',
            'visibility'        => ['required', Rule::in([1,2])],
        ]);

        $blog->title             = $request->title;
        $blog->small_description = $request->small_description;
        $blog->description       = $request->description;
        $blog->category_id       = $request->category_id;
        $blog->page_title        = $request->page_title;
        $blog->page_keyword      = $request->page_keyword;
        $blog->page_description  = $request->page_description;
        $blog->allow_comments    = $request->boolean('allow_comments', true);
        $blog->visibility        = $request->visibility;

        // Regenerate slug if title changed
        if ($blog->isDirty('title')) {
            $slugBase = Str::slug($request->title);
            $slug     = $slugBase;
            $counter  = 1;
            while (Blog::where('slug', $slug)->where('id', '!=', $blog->id)->exists()) {
                $slug = $slugBase . '-' . $counter++;
            }
            $blog->slug = $slug;
        }

        // Handle featured image replacement
        if ($request->hasFile('featured_image')) {
            // Delete old image
            if ($blog->featured_image && Storage::disk('public')->exists($blog->featured_image)) {
                Storage::disk('public')->delete($blog->featured_image);
            }
            $blog->featured_image = $request->file('featured_image')->store('blog_images', 'public');
        }

        $blog->save();

        // Sync tags
        if ($request->filled('tag_ids')) {
            $blog->tags()->sync($request->tag_ids);
        } else {
            $blog->tags()->sync([]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Blog updated successfully.',
            'data'    => $blog->load(['category', 'tags']),
        ]);
    }

    /**
     * Remove the specified blog from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->input('id');
        $blog = Blog::findOrFail($id);

        // Delete image
        if ($blog->featured_image && Storage::disk('public')->exists($blog->featured_image)) {
            Storage::disk('public')->delete($blog->featured_image);
        }

        // Detach tags
        $blog->tags()->detach();

        $blog->delete();

        return response()->json([
            'success' => true,
            'message' => 'Blog deleted successfully.',
            'data'    => ['id' => $id],
        ]);
    }

    /**
     * Show the blog details on frontend, including comments.
     */
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)
                    ->where('visibility', 1)
                    ->with(['category', 'tags', 'comments' => function($q) {
                        $q->where('status', 1)->orderBy('created_at', 'asc');
                    }])
                    ->firstOrFail();

        // Fetch 5 latest blogs (for sidebar)
        $latestBlogs = Blog::where('visibility', 1)->latest()->take(5)->get();

        return view('blog.detail', compact('blog', 'latestBlogs'));
    }

    /**
     * Handle a new comment submission (AJAX).
     */
    public function storeComment(Request $request, $blogId)
    {
        $blog = Blog::findOrFail($blogId);

        if (!$blog->allow_comments) {
            return response()->json([
                'success' => false,
                'message' => 'Comments are disabled for this post.',
            ], 403);
        }

        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'comment' => 'required|string',
            'website' => 'nullable|url',
            'mobile'  => 'nullable|digits_between:6,15',
        ]);

        $comment = BlogComment::create([
            'user_id'   => auth()->id() ?? 0,
            'blog_id'   => $blog->id,
            'name'      => $request->name,
            'email'     => $request->email,
            'website'   => $request->website,
            'mobile'    => $request->mobile,
            'comment'   => $request->comment,
            'status'    => 1, // auto-enable; adjust if moderation is needed
            'created_at'=> now(),
        ]);

        // Return the newly created comment (fresh from DB)
        $newComment = BlogComment::where('id', $comment->id)->first();

        return response()->json([
            'success' => true,
            'message' => 'Comment submitted successfully.',
            'data'    => $newComment,
        ]);
    }
}
