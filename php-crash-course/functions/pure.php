<?php

// Funzione pura: con gli stessi argomenti dà sempre lo stesso risultato
function add (int $a, int $b) : int {
    return $a + $b;
}

var_dump(add(1,3), add(1,3));

$total = 0;

// Funzione non pura: anche con gli stessi argomenti non dà lo stesso risultato per via del side effect, esiste la
// variable globale
function addToTotal($value) {
    global $total;
    $total += $value;
    return $total;
}

var_dump(addToTotal(1), addToTotal(1));