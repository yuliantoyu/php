<?php

// Define a simple class
class Animal {
    // Properties (attributes)
    protected $name;
    protected $sound;

    // Constructor
    public function __construct($name, $sound) {
        $this->name = $name;
        $this->sound = $sound;
    }

    // Methods (behaviors)
    public function makeSound() {
        return $this->sound;
    }

    public function getName() {
        return $this->name;
    }
}

// Inheritance: Dog class extends Animal class
class Dog extends Animal {
    // Additional method specific to Dog
    public function fetch() {
        return $this->name . " is fetching!";
    }

    // Polymorphism: Override the makeSound method
    public function makeSound() {
        return $this->sound . " and barking!";
    }
}

// Create instances of the classes
$animal = new Animal("Generic Animal", "Generic Sound");
$dog = new Dog("Buddy", "Woof");

// Access properties using encapsulation
echo $animal->getName() . " says " . $animal->makeSound() . "\n";
echo $dog->getName() . " says " . $dog->makeSound() . "\n";
echo $dog->fetch() . "\n";

?>
