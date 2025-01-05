<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('features.home.index');
});

Route::apiResource('blogs', BlogController::class);

Route::apiResource('services', ServiceController::class);

// Route::get('/pricing', function () {
//     return view('features.services.index');
// });
