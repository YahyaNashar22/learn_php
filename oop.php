<?php


class Human
{
    private $age;
    private $name;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function info()
    {
        echo "Name: $this->name  \n";
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

$h1 = new Human("child", 10);
$h2 = new Human("yahya", 26);

$h1->getAge();

$h1->setAge(23);

$h1->getAge();

$h2->info();