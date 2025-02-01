<?php

class A {
    public $age = 23;
}

class B extends A{

}

$a = new A();
$b = new B();

echo $a->age;
echo "\n";
$b->age = 12;
echo $b->age;
echo "\n";
echo $a->age;
