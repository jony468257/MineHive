<?php

use App\Http\Controllers\Features\Authorization\ProfileController;
use App\Http\Controllers\Features\Authorization\RolesController;
use App\Http\Controllers\Features\Authorization\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::group(['prefix' => 'profile'], static function () {
        Route::get('edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::post('update/{id}', [ProfileController::class, 'update'])->name('profile.update');
        Route::get('password', [ProfileController::class, 'changePassword'])->name('profile.password.change');
        Route::post('password-update', [ProfileController::class, 'updatePassword'])->name('profile.password.update');
    });

    Route::group(['prefix' => 'users'], static function () {
        Route::get('/', [UserController::class, 'index'])->name('users.index');
        Route::get('create', [UserController::class, 'create'])->name('users.create');
        Route::post('store', [UserController::class, 'store'])->name('users.store');
        Route::post('show', [UserController::class, 'show'])->name('users.show');
        Route::post('edit', [UserController::class, 'edit'])->name('users.edit');
        Route::post('update/{id}', [UserController::class, 'update'])->name('users.update');
        Route::delete('destroy/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    });

    Route::group(['prefix' => 'roles'], static function () {
        Route::get('/', [RolesController::class, 'index'])->name('roles.index');
        Route::get('create', [RolesController::class, 'create'])->name('roles.create');
        Route::post('store', [RolesController::class, 'store'])->name('roles.store');
        Route::get('edit/{id}', [RolesController::class, 'edit'])->name('roles.edit');
        Route::post('update/{id}', [RolesController::class, 'update'])->name('roles.update');
        Route::delete('destroy/{id}', [RolesController::class, 'destroy'])->name('roles.destroy');
    });
});
