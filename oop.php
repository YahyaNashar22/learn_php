<?php


class Human
{
    private $age;

    public function info()
    {
        echo "Age: $this->age  \n";
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        echo "The age is $this->age\n";
    }
}

$h1 = new Human();

$h1->getAge();

$h1->setAge(23);

$h1->getAge();