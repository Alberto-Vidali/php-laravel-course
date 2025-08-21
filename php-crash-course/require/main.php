<?php

// Include il file o include una sola volta. Il programma viene eseguito anche se il file è mancante
include "config.php";
include_once "config.php";
// Lancia immediatamente un errore se il file è mancante. Si può anche richiedere una sola volta.
require "config.php";
require_once "config.php";

echo "Database $dbHost:$dbUser";