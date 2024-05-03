<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/tests', [TestController::class, 'index']);