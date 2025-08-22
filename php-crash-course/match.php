<?php

$status = 404;

// Alternativa a switch con sintassi diversa.
// Viene usata la comparazione stretta implicitamente (tre =, ===) per il parametro di match
$message = match($status) {
    200, 300 => "Success",
    400, 404, 500 => "Error",
    default => "Unknown status"
};

echo $message . "\n";