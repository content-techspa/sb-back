<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
        $newsItems = News::all();
        return view('administration.news', compact('newsItems'));
    }

    public function frontendIndex()
    {
        $newsItems = News::latest()->paginate(6); // Fetch news items with pagination for frontend
        return view('news', compact('newsItems'));
    }

    public function show($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        $latestNews = News::latest()->take(5)->get(); // Fetch 5 latest news items for the sidebar
        return view('newsdetail', compact('news', 'latestNews'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'cover_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'pdf_file' => 'required|mimes:pdf|max:51200', // 50 MB
                'content' => 'nullable|string',
                'meta_title' => 'nullable|string|max:255',
                'meta_description' => 'nullable|string|max:500',
                'keywords' => 'nullable|string',
            ]);

            $coverImagePath = $request->file('cover_image')->store('news_images', 'public');
            $pdfFilePath = $request->file('pdf_file')->store('news_pdfs', 'public');

            $news = News::create([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'cover_image' => $coverImagePath,
                'pdf_file' => $pdfFilePath,
                'content' => $request->content,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'keywords' => $request->keywords,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'News created successfully.',
                'data' => $news
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to create news.',
                'data' => ['error' => $e->getMessage()]
            ], 500);
        }
    }

    public function update(Request $request, News $news)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'cover_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'pdf_file' => 'nullable|mimes:pdf|max:51200', // 50 MB
                'content' => 'nullable|string',
                'meta_title' => 'nullable|string|max:255',
                'meta_description' => 'nullable|string|max:500',
                'keywords' => 'nullable|string',
            ]);

            $news->title = $request->title;
            $news->slug = Str::slug($request->title);
            $news->content = $request->content;
            $news->meta_title = $request->meta_title;
            $news->meta_description = $request->meta_description;
            $news->keywords = $request->keywords;

            if ($request->hasFile('cover_image')) {
                if (Storage::exists('public/' . $news->cover_image)) {
                    Storage::delete('public/' . $news->cover_image);
                }
                $news->cover_image = $request->file('cover_image')->store('news_images', 'public');
            }

            if ($request->hasFile('pdf_file')) {
                if (Storage::exists('public/' . $news->pdf_file)) {
                    Storage::delete('public/' . $news->pdf_file);
                }
                $news->pdf_file = $request->file('pdf_file')->store('news_pdfs', 'public');
            }

            $news->save();

            return response()->json([
                'success' => true,
                'message' => 'News updated successfully.',
                'data' => $news
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update news.',
                'data' => ['error' => $e->getMessage()]
            ], 500);
        }
    }

    public function destroy(Request $request)
    {
        try {
            $id = $request->input('id');
            $news = News::findOrFail($id);

            Storage::delete(['public/' . $news->cover_image, 'public/' . $news->pdf_file]);

            $news->delete();

            return response()->json([
                'success' => true,
                'message' => 'News deleted successfully.',
                'data' => ['id' => $id]
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete news.',
                'data' => ['error' => $e->getMessage()]
            ], 500);
        }
    }
}
