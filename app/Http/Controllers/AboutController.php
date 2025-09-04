<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgencySection;


class AboutController extends Controller
{

    public function about()
    {
         $agency = AgencySection::latest()->first();
        return view('frontend.about.index',compact('agency')); // Update path based on your view folder
    }
}
