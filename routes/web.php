<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('features.home.index');
});

Route::apiResource('blogs', BlogController::class);

Route::apiResource('services', ServiceController::class);

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/contact', function () {
    return view('features.contact.index');
});

// Route::get('/pricing', function () {
//     return view('features.services.index');
// });
Route::get('/about', function () {
    return view('features.about.index');
});

Route::get('/testimonials', function () {
    return view('features.testimonial.index');
});

Route::get('/testimonials/galleries', function () {
    return view('features.testimonial.gallery');
});

