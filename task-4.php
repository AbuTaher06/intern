<?php 
class Animal{
    public function makeSound(){
        echo "Generic animals sound\n";
    }
}

class Dog extends Animal{
    public function makeSound(){
        echo "The dog barks: Woof! Woof!\n";
    }
}

class Cat extends Animal{
    public function makeSound(){        
        echo "The cat meows: Meow! Meow!\n";
    }
}

class Cow extends Animal{
    public function makeSound(){
        echo "The cow moos: Moo! Moo!\n";
    }
}

$animal = new Animal();
$dog = new Dog();
$cat = new Cat();
$cow = new Cow();
$animal->makeSound();
$dog->makeSound();
$cat->makeSound();
$cow->makeSound();