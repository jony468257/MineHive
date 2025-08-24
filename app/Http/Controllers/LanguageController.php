<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    /**
     * @param Request $request
     * @return int
     */
    public function change(Request $request): int
    {
        Session::put('locale', $request->len);
        return 1;
    }
}
