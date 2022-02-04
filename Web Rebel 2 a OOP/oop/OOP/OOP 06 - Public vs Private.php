<?php

class Being
{
    private $name; // aby sa nedalo v polke hry zmeniť meno 
    private $health;
    private $mana = 60;
    private $invetory = [];

    
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

    private function perish()
    {
        var_dump( $this->name . ' died ');
    }
}


$hero = new Being('Marceline', 50, [
    'gold' => 120,
    'potion' => 3,
    'axe' => 1,
]);

$enemies = [
    new Being('Ice King', 50, [ 'gold' => 900, 'crown' => 1, 'gunther' => 1 ]),
    new Being('The Litch',9999, [ 'gold' => 999 ]),
];

$hero->takeDamage(40);
$hero->takeDamage(5);
$hero->takeDamage(4);
$hero->takeDamage(7);

$enemies[0]->takeDamage(3);