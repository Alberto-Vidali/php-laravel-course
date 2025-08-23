<?php

$name = "John";

echo "Hello, $name\n!";
// Con apici singoli trattato letteralmente ignorando variabili e caratteri speciali
echo 'Hello, $name\n!' . "\n";

// Uso di variabili con EOD multilinea
$heredoc = <<<EOD
Multi line string
with variable $name \n
EOD;

// Stringhe letterali con 'EOD' (tra apici singoli)
$nowdoc = <<<'EOD'
Multi line string
with variable $name
EOD;

echo $heredoc;
echo $nowdoc . "\n";