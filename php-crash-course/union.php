<?php

declare(strict_types=1);

// Permette di usare più tipi diversi al posto di uno solo come validi.
function processInput(int|float|string $input) {
    return match(true) {
        is_int($input) => "Integer: " . ($input * 2),
        is_float($input) => "Float: " . round ($input, 2),
        is_string($input) => "String " . strtoupper($input),
        default => "Unknown type"
    };
}

$inputs = [42, 3.14, "hello"];

foreach($inputs as $input) {
    echo processInput($input) . "\n";
}