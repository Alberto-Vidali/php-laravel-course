<?php

function greet(string $name, string $greeting = "Hello", bool $shout = false) : string {
    $message = "$greeting, $name!";
    return $shout ? strtoupper($message) : $message;
}

echo greet("Alice") . "\n";
echo greet("Alice, Hi") . "\n";
echo greet("Alice", "Hi", true) . "\n";

// Se uso argomenti posizionali devo per forza fornirli tutti se vado in ordine sparso.
echo greet(name: "David", shout: true, greeting: "Hi") . "\n";
// Ho dato il primo nell'ordine corretto e mischiato l'ordine degli altri dandoli posizionalmente, quindi funziona
echo greet("David", shout: false, greeting: "Hi") . "\n";