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
}

class B extends A implements printAge {}


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
