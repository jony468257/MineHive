<?php

namespace App\Http\Controllers\Features\Theme;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function theme()
    {
        return view('features.theme.theme');
    }
}
