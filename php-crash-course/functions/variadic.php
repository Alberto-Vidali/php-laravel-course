<?php

declare(strict_types=1);

// Funzioni che accettano un numero infinito di argomenti (come array dopo gli obbligatori)

function sum(int ...$numbers) : int {
    $sum = 0;
    foreach($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

echo sum(3,5,2) . "\n";
var_dump(sum(5));
var_dump(sum(5,10,5));

function introduceTeam(string $teamName, string ...$members) : void {
    var_dump($members);
    echo "The teamname is $teamName\n";
    // Implode decompone un array in una stringa. Primo argomento: cosa mettere tra gli elementi, secondo elemento, la stringa da decomporre.
    echo "Members: " . implode(", ",$members) . "\n";
}

introduceTeam("Mugenri", "Alberto", "Vidali");

$numbers = [1, 2, 3];

// Spread per inserire rapidamente gli elementi di un array in una funzione variadica
var_dump(sum(4, ...$numbers));