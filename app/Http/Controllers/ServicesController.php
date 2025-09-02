<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
   
    public function index()
    {
  
        return view('frontend.services.index');
    }
     public function details()
    {
        return view('frontend.services-details.index');
    }
}


