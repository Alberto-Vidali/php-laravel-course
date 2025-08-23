<?php

$str = "Hello, World!";

echo $str[0] . "\n";
// Numeri negativi: dalla fine della stringa
echo $str[-1] . "\n";

echo substr($str,0,5) . "\n";
// Resto della stringa a partire da indice determinato
echo substr($str,5) . "\n";

echo strtoupper($str) . "\n";
echo strtolower($str) . "\n";

// Rende maiuscolo il primo carattere
echo ucfirst(strtolower($str)) . "\n";

$greeting = "Hello, " . "World!";
// Concatenazione variabile + altro
$greeting .= " How are you?";
echo $greeting . "\n";