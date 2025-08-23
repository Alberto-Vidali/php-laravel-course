<?php

$simpleArray = [1, 2, 3, 4, 5];
$associativeArray = [
    "name" => "John",
    "age" => 30,
    "city" => "New York"
];

echo $simpleArray[0] . "\n";
echo $associativeArray["name"] . "\n";

$simpleArray[] = 6;
// Aggiungere a un array associativo
$associativeArray["country"] = "USA";

$matrix = [
    [1,2,3],
    [4,5,6]
];

echo $matrix[1][1] . "\n";

$fruits = ["apple", "banana", "orange"];
var_dump(count($fruits));
sort($fruits);
var_dump($fruits);
rsort($fruits);
var_dump($fruits);

var_dump($associativeArray);
// Ordina per valore
asort($associativeArray);
var_dump($associativeArray);
// Ordina per chiave
ksort($associativeArray);
var_dump($associativeArray);

$numbers = range(1,5);
var_dump($numbers);
$squared = array_map(fn ($s) => $s * $s, $numbers);
var_dump($squared);

$evenNumbers = array_filter($numbers , fn ($n) => $n % 2 == 0);
var_dump($evenNumbers);

// Riduce un array a un solo elemento tramite una callback.
$sum = array_reduce($numbers,
    // Carry è il terzo argomento, che inizia da 0
    fn ($carry, $n) => $carry + $n,
    0
);

var_dump($sum);
// Array con anche i numeri di prima da 1 a 5 con lo spread operator.
$moreNumbers = [0, ...$numbers, 6];
var_dump($moreNumbers);

// Primo e secondo elemento di un array (era già stato ordinato questo array della frutta quindi l'ordine
// sembra incoerente con l'assegnamento)
[$first, $second] = $fruits;
var_dump($first, $second);