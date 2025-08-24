<?php

use App\Http\Controllers\Api\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Api\Auth\RegisteredUserController;
use App\Http\Controllers\Api\Authorization\PermissionController;
use App\Http\Controllers\Api\Authorization\RoleController;
use App\Http\Controllers\Api\Authorization\UserController;
use Illuminate\Support\Facades\Route;


// user registration
Route::post('registration', [RegisteredUserController::class, 'store']);
Route::post('login', [AuthenticatedSessionController::class, 'store']);
Route::get('unauthorized', [AuthenticatedSessionController::class, 'unauthorized'])->name('unauthorized');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('user/{id?}', [UserController::class, 'user']);
    Route::get('users', [UserController::class, 'users']);
    Route::post('user/update/{id}', [UserController::class, 'update']);
    Route::post('user/assign-role/{id}', [UserController::class, 'assignRole']);
    Route::post('password-change/{id}', [UserController::class, 'passwordChange']);
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy']);
    Route::delete('user/delete/{id}', [UserController::class, 'destroy']);

    Route::apiResource('role', RoleController::class);
    Route::apiResource('permission', PermissionController::class);
});
