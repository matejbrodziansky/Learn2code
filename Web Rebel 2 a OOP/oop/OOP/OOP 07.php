<?php

class Being
{
    protected $name; // aby sa nedalo v polke hry zmeniť meno 
    protected $health;
    protected $mana = 60;
    protected $invetory = [];


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
        var_dump( $this->name . ' died ');
    }
}


class Enemy extends Being
{
    public function takeDamage($dmg)
    {
        $this->health = $this->health - $dmg;

        echo '*ouch';

        if ($this->health <= 0 ) {
            var_dump($this->name. ' dropped '. $this->invetory['gold'].' gold.');
            $this->perish();
        }else {
            var_dump( $this->name . ' has ' . $this->health . 'HP' );
        }

    }
}

$hero = new Being('Marceline', 50, [
    'gold' => 120, 'potion' => 3, 'axe' => 1,
]);

//enemy atacks me 
$hero->takeDamage(40);
$hero->takeDamage(5);
$hero->takeDamage(4);
$hero->takeDamage(7);


echo $hero->getName(). ' ('. $hero->getHealth() . 'HPCOK';

$enemies = [
    new Enemy('Ice King', 50, [ 'gold' => 900, 'crown' => 1, 'gunther' => 1 ]),
    new Enemy('The Litch',9999, [ 'gold' => 999 ]),
];


$enemies[0]->takeDamage(10);
$enemies[0]->takeDamage(10);
$enemies[0]->takeDamage(5);
$enemies[0]->takeDamage(50);