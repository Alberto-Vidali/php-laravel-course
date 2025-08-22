<?php

declare(strict_types=1);

// A meno che non sia attivo il declare(strict_types=1)..
// Non si segnala solo cosa passare ma anche come va convertito se possibile (una stringa che viene trasformata in int)
function add(int $a, int $b) : int {
    return $a + $b;
}

echo add (3, 5);

// funziona a meno che non siano attivi gli strict_types
// echo add (5, "3");

// non compila perchè 3a non ha un corrispondente int
// echo add (5, "3a");