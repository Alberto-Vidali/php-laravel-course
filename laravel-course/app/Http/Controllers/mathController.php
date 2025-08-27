<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mathController extends Controller
{
    public function subtract(int $a, int $b) {
        return $a - $b;
    }

    public function sum(int $a, int $b) {
        return $a + $b;
    } 
}
