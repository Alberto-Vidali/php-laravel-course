<?php

$int = 42;
$float = 3.14;
$stringToInt = (int)"100";
$floatToInt = (int)3.99;

var_dump($int, $float, $stringToInt, $floatToInt);
var_dump(7 % 2 === 1);

var_dump(
    // Arrotonda verso l'intero più vicino, conviene rispetto al cast
    round(3,7),
    round(3.4),
    floor(3.8),
    ceil(3.1),
    min(2, 3, 1, 7),
    max(2, 3, 1, 7),
    rand(1, 10),
    abs(-5)
);

$number = 1234.89;

// Quante cifre decimali, che usare per separare i decimali, che simbolo usare per le migliaia (in questo caso ",")
echo "Formatted: " . number_format($number, 2, ".", ",");