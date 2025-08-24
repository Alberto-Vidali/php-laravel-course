<?php

class User {
    public function __construct(public string $name) {

    }

    public function save(): void {
        $this->log("User {$this->name} saved");
    }
}