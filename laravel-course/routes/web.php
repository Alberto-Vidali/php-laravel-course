<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view("welcome");
});

Route::view("/about-us", "about")->name("about");

// Definisce tutte le route con prefisso "admin"
Route::prefix("admin")->group(function() {
    // Matcha quindi admin/users perchè è la route che definisco all'interno di users
    Route::get("users", function() {
        return "/admin/users";
    });
});

// Matcha tutte le route che non vengono matchate da altro (dove altrimenti Laravel mostrerebbe una 404)
Route::fallback(function() {
    return "fallback";
});

// Route che accetta due parametri che devono essere due numeri e ne restituisce la somma
Route::get("/{firstNumber}/{secondNumber}", function (int $firstNumber, int $secondNumber) {
    return $firstNumber + $secondNumber;
})->whereNumber(["firstNumber", "secondNumber"]);