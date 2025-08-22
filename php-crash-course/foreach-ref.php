<?php

// Crea un array lungo e contenente gli elementi nel range.
// In PHP è possibile mettere degli underscore dei numeri (anche 1_3) e verrà letto correttamente.
$largeArray = range(1,1_000_000);

// Ritorna l'attuale tempo Unix
$startTime = microtime(true);
$startMem = memory_get_usage();

// Aggiungi un nuovo elemento alla fine dell'array
$out = [];

foreach ($largeArray as $value) {
    // Alla fine dell'elemento out ne viene aggiunto un altro pari a value * 2
    $out[] = $value * 2;
}

// Alternativa peggiore in termini di prestazioni: modificare direttamente l'array originale.
// Non serve più l'array di out perchè sto modificando appunto l'array originale.
/* 
foreach ($largeArray as $value) {
    $value * 2;
}
*/
$endTime = microtime(true);
$endMem = memory_get_usage();

echo "Time " . ($endTime - $startTime) . " seconds\n";

echo "Memory " . (round($endMem - $startMem) / 1024 / 1024) . " MBs\n";