<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index() {
        // Passaggio dati alle View
        return View("home.index", [
            "name" => "Alberto",
            "surname" => "Vidali"
        ]);
    }

    public function index2() {
        // Modo alternativo
        return view("home.index")
            ->with("name","Alberto")
            ->with("surname", "Vidali");
    }
}
