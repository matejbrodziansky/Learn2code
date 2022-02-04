<?php

namespace Penis;

class Being
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

    public function takeDamage($dmg)
    {
        $this->health = $this->health - $dmg;

        //armor, spells, dice roll...
        var_dump( -1*$dmg);

        if ($this->health <= 0 ) {
            $this->perish();
        }else {
            var_dump( $this->name . ' has ' . $this->health . 'HP' );
        }
    }

    protected function perish()  //protected može byť dedena
    {
        static::$deathCount += 1; // pri static nepoužívame this su to hodnoty triedy a su tam štvorbodky
        var_dump( $this->name . ' died ');
    }
}


