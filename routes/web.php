<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('features.home.index');
});

Route::apiResource('blogs', BlogController::class);

Route::get('/pricing', function () {
    return view('features.pricing.index');
});
