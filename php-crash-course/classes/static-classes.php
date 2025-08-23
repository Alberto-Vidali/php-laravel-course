<?php

class MathUtils {
    public static float $pi = 3.14159;

    public static function square(float $num): float {
        return $num * $num;
    }
}

// Uso di classi con parametri e metodi statici
var_dump(
    MathUtils::$pi,
    MathUtils::square(4)
);

class Connection {
    private static $instance = null;
    // Rendendo privato il costruttore, rendo impossibile instanziare la classe al di là delle variabili statiche.
    // Cosa da fare per i singleton, come l'ipotetica connessione
    private function __construct() {}

    public static function singleton() {
        if (null === static::$instance) {
            // Creo la connessione usando il costruttore privato per ottenere un istanza di Connection se l'
            // istanza statica è vuota.
            static::$instance = new static();
        }
        return static::$instance;
    }
}

$connection = Connection::singleton();