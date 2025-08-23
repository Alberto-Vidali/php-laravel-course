<?php

$users = [
    ["id" => 1, "name" => "Alice", "role" => "admin"],
    ["id" => 2, "name" => "Bob", "role" => "user"],
    ["id" => 3, "name" => "Charlie", "role" => "user"]
];

// Creo e uso una funzione anonima che è impostata per usarla come filtro di ricerca per "array_filter".

function createFilter($key, $value) {
    return fn ($item) => $item[$key] === $value;
}

$isAdmin = createFilter("role", "admin");
$admins = array_filter($users, $isAdmin);
var_dump($admins);

$isBob = createFilter("name", "Bob");
var_dump(array_filter($users, $isBob));