<?php

namespace Penis;

abstract class Being
{
    protected $name; // aby sa nedalo v polke hry zmeniť meno 
    protected $health;
    protected $mana = 60;
    protected $invetory = [];
    
    public static $deathCount = 0;


    public function getName() //možem si nechat vypisať private 
    {
        return $this->name;
    }

    public function getHealth()  //možem si nechat vypisať private 
    {
        return $this->health;
    }

    public function setName($name) //možem si nechat nastaviť do private 
    {
        $this->name = $name;
    }

    public function setHealth($health)  //možem si nechat nastaviť do private 
    {
        $this->health = $health;
    }

    
    public function __construct($name, $health, array $invetory)
    {
        $this->name      = $name;
        $this->health    = $health;
        $this->invetory  = $invetory;
    }

    abstract public function takeDamage($dmg);
    abstract  protected function perish();  
}


