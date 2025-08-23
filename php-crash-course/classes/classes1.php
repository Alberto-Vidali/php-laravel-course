<?php

class Person {
    public string $name;
    public int $age;

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce(): string {
        return "Hi, I'm $this->name and I'm $this->age years old.";
    }
}

class Person2 {
    // Promozione dei dati del costruttore: non è necessario che dichiaro i campi se li inizializzo in questo modo.
    public function __construct(public string $name, public int $age) {}

    public function introduce(): string {
        return "Hi, I'm $this->name and I'm $this->age years old.";
    }
}

$person = new Person("Alberto", 34);
$person2 = new Person2("Federica", 30);

echo $person->introduce();
echo "\n";
echo $person2->introduce();
echo "\n";

class Employee extends Person {
    public string $name;
    public int $age;
    public string $position;

    public function __construct(string $name, int $age, string $position) {
        $this->name = $name;
        $this->age = $age;
        $this->position = $position;
    }

    public function introduce(): string {
        return parent::introduce() . " I'm a $this->position.\n";
    }
}

$employee = new Employee("Jerry", 45, "manager");
echo $employee->introduce();