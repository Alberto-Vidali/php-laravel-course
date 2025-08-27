<?php

use App\Http\Controllers\mathController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view("welcome");
});

Route::view("/about-us", "about")->name("about");


Route::controller(mathController::class)->group(function () {
    Route::get("/subtract/{first}/{second}", "subtract")->whereNumber(["first", "second"]);
    Route::get("/sum/{first}/{second}", "sum");
});