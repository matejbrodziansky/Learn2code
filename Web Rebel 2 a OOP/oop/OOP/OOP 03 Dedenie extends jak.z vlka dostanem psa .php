<?php

class Wolf
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
        var_dump("GGGGGGGGrrrrrrRRRRrRRR!!");
    }
}
class Dog extends Wolf
{
    

    public function bark()
    {
        var_dump( "I am just a puppu, woof :(");
    }
}

class Coyote extends Wolf
{
    public function bark()
    {
        echo "woof, ah-MOTHERFUCKIN-WOOF";
    }

    public function kill()
    {
        var_dump( $this->name . " Just fuckin killed you dead. " );
    }
}

$dunco = new Dog("Dunco", 5);
var_dump($dunco->name);
$dunco->bark();

$courage = new Wolf("Courage", 12);
var_dump($courage->name);
$courage->bark();

$danger = new Coyote("Fkin Monster", 15);
var_dump($danger->name);
$danger->kill();


