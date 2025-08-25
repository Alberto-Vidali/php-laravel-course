<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    $person = [
        "name" => "Zura",
        "email" => "zura@example.com",
    ];
    // Simile a dump_var ma nel framework laravel Utile per debug.
    // dump($person);
    // Stampa a video la variabile e interrompe l'esecuzione del codice.
    // dd($person);
    return view("welcome");
});

Route::view("/about", "about");

Route::get("/product/{id}", function(string $id) {
    return "Product ID=$id";
})->whereNumber("id");

Route::get("/product/category/{category?}", function(string $category = "category") {
    return "Product for category = $category";
});

Route::get("/user/{username}", function (string $username) {

})->where("username", "[a-z]+");

Route::get("{lang}/product/{id}", function(string $lang, string $id) {
    return "$lang, $id";
    // Lingua solo caratteri minuscoli esattamente 2, id di almeno 4 numeri
})->where(["lang" => '[a-z]{2}', "id" => '\d{4,}']);

Route::get("search/{search}", function(string $search) {
    return "$search";
    // In questo esempio sono quindi ammesse anche route come search/18/7 perché é interpretato letteralmente come 18/7
})->where("search", '.+');

Route::view('/about', 'about');