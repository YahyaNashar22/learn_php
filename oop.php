<?php


class Human
{
    public $age= 10;

    public function info()
    {
        echo "Age: $this->age  \n";
    }
}

$h1 = new Human();
// $h1->age = 22;

echo $h1->age;
?>