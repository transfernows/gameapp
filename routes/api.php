<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\User\UserController;

Route::controller(RegisterController::class)->group(function () {
    Route::post('register', 'register');
    Route::post('login', 'login');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::resource('products', ProductController::class);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::resource('user/list', UserController::class);
    Route::resource('user/balance', UserController::class);
    Route::resource('user/activites', UserController::class);
    Route::resource('user/details', UserController::class);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::resource('bonus/list', UserController::class);
    Route::resource('bonus/categori', UserController::class);
    Route::resource('bonus/requests', UserController::class);
    Route::resource('bonus/logsa', UserController::class);
});


Route::middleware('auth:sanctum')->group(function () {
    Route::resource('blog/category', UserController::class);
    Route::resource('blog/content', UserController::class);
    Route::resource('bonus/settings', UserController::class);
    Route::resource('bonus/list', UserController::class);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::resource('game/provider', UserController::class);
    Route::resource('game/list', UserController::class);
    Route::resource('game/category', UserController::class);
});




