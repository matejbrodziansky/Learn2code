<?php

class Dog
{
    public $name;
    public $weight;

    public function __construct($name, $weight)
    {
        $this->name = $name;
        $this->weight = $weight;
    }

    public function bark()
    {
        echo $this->name . 'woof woof';
    }
}

$dunco = new Dog("Dunco", 5);
var_dump($dunco->name);
$dunco->bark();


