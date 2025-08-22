<?php

$globalSuperHero = "Superman";

function revealIdentity() {
    // Usa una variabile globale nella funzione. Metodo non consigliato
    global $globalSuperHero;
    $message = "real name is Clark Kent\n";
    echo "$globalSuperHero $message";
}

revealIdentity();

function countVisitors() {
    // Una variabile static viene ricordata all'interno della funzione e non è accessibile da fuori.
    // Il suo valore non viene perso nemmeno al termine della funzione.

    // Un ottimo caso di uso è per i singleton
    static $visitorCount = 0;
    $visitorCount++;
    echo "Visitor #$visitorCount has arrived!\n"; 
}

countVisitors();
countVisitors();
countVisitors();