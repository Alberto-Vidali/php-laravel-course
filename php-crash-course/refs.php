<?php

// Sono essenzialmente la stessa variabile perché client punta a person.

$person = "John";
$client = &$person;

var_dump($person, $client);

$client = "Robert";

var_dump($person, $client);

$person = "Harry";

var_dump($person, $client);

function doubleValue(int $number) : int {
    $number *= 2;
    return $number;
}

function doubleValue2(int &$number) : int {
    $number *= 2;
    return $number;
}

$original = 5;

echo "doubleValue($original)\n";
echo "Original is $original after function doubleValue\n";

echo "doubleValue2($original)\n";
echo "Original is $original after function doubleValue2\n";