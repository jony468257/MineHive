<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        return view('frontend.about.index'); // Update path based on your view folder
    }
}
