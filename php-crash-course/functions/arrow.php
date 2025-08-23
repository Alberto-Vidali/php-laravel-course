<?php

$numbers = [1, 2, 3, 4, 5];
$multiplier = 3;

$squared = array_map(function ($n) use ($multiplier) {
    return $n * $multiplier;
}, $numbers);

var_dump($numbers, $squared);

// Niente parentesi graffe, si mette subito il valore da ritornare, possono accedere allo scope del genitore.ddddd
$squared = array_map(fn ($n) => $n * $multiplier, $numbers);

var_dump($numbers, $squared);