<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\GalleryController;
use App\Models\Gallery;
use Illuminate\Support\Facades\Route;

Route::resource('/', HomeController::class);
Route::apiResource('blogs', BlogController::class);
Route::apiResource('services', ServiceController::class);
Route::apiResource('galleries', GalleryController::class);

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/contact', function () {
    return view('features.contact.index');
});

Route::get('/about', function () {
    return view('features.about.index');
});

Route::get('/testimonials', [GalleryController::class, 'index']);
Route::get('/testimonials/galleries', [GalleryController::class, 'show']);

