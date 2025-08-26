<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShowCarController;

Route::get('/', function() {
    return view("welcome");
});

Route::view("/about-us", "about")->name("about");

// Risorse solo per le API (niente create e edit, ma gli altri si)
Route::apiResources([
    "cars" => CarController::class,
    "products" => ProductController::class
]);