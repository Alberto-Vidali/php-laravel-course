<?php

$size = "M";

switch ($size) {
    case "S":
    case "M":
        echo "Small or Medium size\n";
        break;
    case "L":
    case "XL":
        echo "Large or Extra Large size\n";
        break;
    default:
        echo "Unknown size\n";
}

$badAttempts = 3;

// Esempio di caso utile di uso senza i break dopo ogni case.
switch ($badAttempts) {
    case 3:
        echo "You are blocked!\n";
    default:
        echo "Bad attempt detected!\n";
        $badAttempts++;
}