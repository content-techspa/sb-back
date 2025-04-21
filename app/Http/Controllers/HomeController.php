<?php

namespace App\Http\Controllers;

use App\Models\GalleryCategory;
use App\Models\HomeProgram;
use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        $jsonPath = storage_path('app/public/data/homeUniversities.json');
        $homeUniversities = HomeProgram::all();

        $slider = Slider::first();
        $testimonials = Testimonial::all();
        
    return view('home', compact('homeUniversities', 'slider', 'testimonials'));
    }
     function aboutUs(){
        $testimonials = Testimonial::all();
        return view('about', data: compact('testimonials'));
    }
     function contactUs(){
        return view('contact' );
    }
    function partnerWithUs(){
        return view('partner-with-us');
    }
    function news(){
        return view('news');
    }
    public function gallery()
    {
        $categories = GalleryCategory::with('images')->get(); // Fetch categories with images
        return view('gallery', compact('categories'));
    }

}
