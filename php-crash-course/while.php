<?php

$secret = "magic";
$attempts = 0;
$maxAttempts = 5;

while ($attempts < $maxAttempts) {
    echo "Guess the password: ";
    // prende lo standard input rimuovendo gli spazi
    $guess = trim(fgets(STDIN));
    $attempts++;

    if ($guess == $secret) {
        echo "Correct! You've unlocked the treasure!\n";
        break;
    } elseif ($attempts == $maxAttempts) {
        echo "Out of attemps!";
    } else {
        echo "Wrong! Try again. Attempts left:" . ($maxAttempts - $attempts) . "\n";
    }
}