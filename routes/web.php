<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Features\Theme\ThemeController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

 

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::put('language', [LanguageController::class, 'change'])->name('language.change');

    // theme
    Route::get('theme', [ThemeController::class, 'theme'])->name('feature.theme');
});

Route::get('/', [HomeController::class, 'index'])->name('home-page');


require __DIR__ . '/auth.php';
require __DIR__ . '/authorization.php';
