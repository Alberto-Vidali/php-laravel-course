<?php

function greet($name) {
    echo "Welcome, $name\n";
}

function welcome($name) {
    return "Hello, $name\n";
}

greet("Groot");
echo welcome("Groot");

// Funzione con argomento predefinito. Devono essere sempre essere messi dopo quelli obbligatori, altrimenti bisogna sempre
// darli tutti in quanto non compilerebbe diversamente.
function greetWithTime($name, $time = "day") {
    return "Good $time, $name\n";
}

echo greetWithTime("Bob");
echo greetWithTime("Bob", "night");