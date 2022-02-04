<?php

class Dog
{
    public $name = 'Badass';
    public $weight = 5;

    public function bark()
    {
        echo 'woof woooooof';
    }
}

$dunco = new Dog();

var_dump($dunco->name);

$dunco->bark();

