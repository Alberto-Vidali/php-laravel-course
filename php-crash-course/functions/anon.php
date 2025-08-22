<?php

// Chiamate anche closures le funzioni anonime

$greet = function ($name) {
    return "Hello, $name\n";
};

// Nota l'uso del dollaro per la chiamata
echo $greet("Alberto");

$numbers = [1, 2, 3];
$squared = array_map(function ($n) {
    return $n * $n;
}, $numbers);

var_dump($numbers, $squared);

$message = "Bye";

// Use permette di usare e accedere variabili esterne in funzioni anonime.
$greet2 = function ($name) use ($message) {
    $message = $message . "!";
    return "$message, $name\n";
};

echo $greet2("Vidali");

// Il messaggio è stato modificato solo nella funzione anonima, ne è stata importata una copia.
echo $message . "\n";

// Passaggio per riferimento: (&$message) similmente al c++