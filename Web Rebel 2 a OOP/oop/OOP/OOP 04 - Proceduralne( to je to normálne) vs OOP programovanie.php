<?php

class Being
{
    public $name;
    public $health;
    public $mana = 60;
    public $invetory = [];

    
    public function __construct($name, $health, array $invetory)
    {
        $this->name      = $name;
        $this->health    = $health;
        $this->invetory  = $invetory;
    }
    
}


$hero = new Being('Marceline', 50, [
    'gold' => 120,
    'potion' => 3,
    'axe' => 1,
]);

echo '<pre>';
print_r($hero);
echo '</pre>';

$enemies = [
    new Being('Ice King', 50, [ 'gold' => 900, 'crown' => 1, 'gunther' => 1 ]),
    new Being('The Litch',9999, [ 'gold' => 999 ]),
];

$hero->health -= 10; // keby mi niekto jednu šlahne
var_dump($hero->health);

echo '<pre>';
print_r($enemies);
echo '</pre>';


