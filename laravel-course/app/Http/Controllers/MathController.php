<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    public function sum(int $first, int $second) {
        return $first + $second;
    }
    public function subtract(int $first, int $second) {
        return $first - $second;
    }
}
