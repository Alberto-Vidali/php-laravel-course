<?php

function greet($name) {
    echo "Welcome, $name\n";
}

function welcome($name) {
    return "Hello, $name\n";
}

greet("Groot");
echo welcome("Groot");