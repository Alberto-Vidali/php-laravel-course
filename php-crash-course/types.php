<?php

// Implicitamente qualsiasi non 0 è vero
$isStudent = 1;

// Ottieni il tipo della variabile. Tre uguali verifica che anche il tipo delle espressioni sia uguale.
var_dump($isStudent, true, $isStudent === true);

$scores = [85, "90", 95.5];

// Entrambi i valori sono stati forzati ad interi per la valutazione del risultato
var_dump($scores[0] + $scores[1]);

// Risultato finale float. Otterrei il tipo più "preciso / migliore" dell'espressione.
var_dump($scores[0] + $scores[1] + $scores[2]);

// Stampo tutti i tipi dell'array
var_dump($scores);

// Cast
var_dump((int)"18.3");

$total = $scores[0] + $scores[1];
var_dump($total);

// All'interno di doppi apici la concatenazione è automatica.
echo "Total score is: $total \n";

// Eseguito manualmente

echo "Total score is: " . $total . "\n";