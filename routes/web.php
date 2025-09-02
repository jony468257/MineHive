<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Features\Theme\ThemeController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\NewsSourceController;
use App\Http\Controllers\ConsultancyController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;

 


Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::put('language', [LanguageController::class, 'change'])->name('language.change');

    // theme
    Route::get('theme', [ThemeController::class, 'theme'])->name('feature.theme');
    Route::resource('sliders', SliderController::class);
    Route::resource('news', NewsSourceController::class);
    Route::resource('consultancy', ConsultancyController::class);
    Route::resource('blogs', BlogController::class);

});

Route::get('/', [HomeController::class, 'index'])->name('home-page');
Route::get('/about', [AboutController::class, 'about'])->name('about-page');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/services-details', [ServiceController::class, 'details'])->name('services.details');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/contact', [ContactController::class, 'index'])->name('contact-page');


require __DIR__ . '/auth.php';
require __DIR__ . '/authorization.php';
