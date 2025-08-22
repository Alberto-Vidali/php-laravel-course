<?php

declare(strict_types=1);

$abc = null;
// Se il valore è null, assegna ciò che è a destra dell'operatore di coalescing (??)
$db = $abc ?? "default";

// null significa che qualcosa è vuoto (inclusa una variabile non assegnata)

var_dump(
    null == null,
    null == false,
    null == 0,
    null == "",
    null == [],
    $abc,
    isset($abc),
    // Controlla esplicitamente se un valore è nullo
    is_null($abc),
    $db,
    empty([])
);

// Il punto di domanda prima del tipo di un parametro permette il passaggio di un parametro null.
function greet(?string $name) : void {
    echo "Hello, " . ($name ?? "stranger"). "!\n";
}

greet("Groot");
greet(null);

var_dump(
    // Filtra gli elementi di un array in base a una callback. Se non c'è la callback, vengono semplicemente rimossi i null.
    array_filter([1,null,[],"a"])
);