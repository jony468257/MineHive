<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsSource;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\SliderImage;

class HomeController extends Controller
{
     public function index()

    {       
            $slides = SliderImage::latest()->get();        
            $testimonials = Testimonial::latest()->get();
            $galleries = Gallery::latest()->get();
            $blogs = Blog::latest()->get();
            $newsSources = NewsSource::all();
        return view('frontend.home.index',  compact('newsSources', 'blogs', 'galleries', 'testimonials', 'slides'));
    }
   

    
}
