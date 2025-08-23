<?php

$name = "Alice";
$age = 30;

// Come si fa in Python
printf("%s is %d years old.", $name, $age);

$csv = "apple,banana,cherry";
// Crea un array usando il separatore come riferimento per capire quali sono gli elementi.
$fruits = explode(",", $csv);
var_dump($fruits, implode(", ", $fruits));

// Padda con quel carattere fino a quando la stringa non raggiunge una data lunghezza. Può essere a sx, dx o entrambi.
$padded = str_pad("Hello", 11, '-', STR_PAD_BOTH);
echo $padded . "\n";

var_dump(trim("  Hello, World!"));