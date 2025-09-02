<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('frontend.portfolio.index'); // তুমি চাইলে view path পরিবর্তন করতে পারো
    }
}

