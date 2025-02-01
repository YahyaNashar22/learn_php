<?php

interface printAge
{
    function displayAge(): void;
}

class A implements printAge
{
    public $age = 23;

    function displayAge(): void
    {
        echo "$this->age\n";
    }

    function classOne()
    {
        echo "I AM THE PARENT CLASS\n";
    }
}

class B extends A implements printAge
{
    function classTwo()
    {
        if ($this->age < 10) {
            echo "I AM THE SUBCLASS\n";
        } else {
            parent::classOne();
        }
    }
}


$a = new A();
$b = new B();

echo $a->age;
echo "\n";
$b->age = 12;
echo $b->age;
echo "\n";
echo $a->age;
echo "\n";

$b->displayAge();
$b->classTwo();
$b->age = 2;
$b->classTwo();
