<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index2() {
        // Passaggio dati alle View
        return view("home.index", [
            "name" => "Alberto",
            "surname" => "Vidali",
            "job" => "<b>Developer</b>"
        ]);
    }

    public function index() {
        // Modo alternativo
        return view("home.index")
            ->with("name","Alberto")
            ->with("surname", "Vidali")
            ->with("job", "<b>developer</b>")
            ->with("hobbies", ["tennis", "fishing"]);
    }
}