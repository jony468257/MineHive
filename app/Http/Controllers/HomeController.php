<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsSource;
use App\Models\Blog;

class HomeController extends Controller
{
     public function index()

    {
            $blogs = Blog::latest()->get();
        $newsSources = NewsSource::all();
        return view('frontend.home.index',  compact('newsSources', 'blogs'));
    }
   

    
}
