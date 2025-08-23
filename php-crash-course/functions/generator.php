<?php

echo "Normal function \n";

// Modo tradizionale

function countDown(int $start): array {
    $result = [];
    for ($i = $start; $i > 0; $i--) {
        $result[] = random_int(1,100);
    }
    return $result;
}

foreach(countDown(5) as $number) {
    echo "$number\n";
}

echo "Generator \n";

// Generator. yield raccoglie i dati senza terminare la funzione e creare una struttura dati
function countDownGen(int $start): Generator {
    for ($i = $start; $i > 0; $i--) {
        yield random_int(1,100);
    }
}

foreach(countDown(5) as $number) {
    echo "$number\n";
}