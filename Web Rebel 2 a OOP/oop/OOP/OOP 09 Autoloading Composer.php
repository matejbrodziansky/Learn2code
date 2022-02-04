<?php


ini_set('display_startup_error', 1);
ini_set('display_error', 1);
error_reporting(-1);

//require stuff
require_once 'vendor/autoload.php' ;
use Medoo\Medoo;

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

require 'src/Being.php' ;
require 'src/Enemy.php' ;



use Penis\Being;
use Penis\Enemy;

// class Being   // teraz pojde lebo Being spada pod penis v /src
// {
//     public $blah = 'blegh';
// }

// $buh = new \Being();  // neviem prečo nejde 
// echo '<h1>'. $buh->blah . '</h1>' ;


$hero = new Being('Marceline', 50, [
    'gold' => 120, 'potion' => 3, 'axe' => 1,
]);

echo $hero->getName(). ' ('. $hero->getHealth() . 'HPCOK';

//enemy atacks me 
$hero->takeDamage(40);
$hero->takeDamage(5);
$hero->takeDamage(7);



$enemies = [
    new Enemy('Ice King', 50, [ 'gold' => 900, 'crown' => 1, 'gunther' => 1 ]),
    new Enemy('The Litch',9999, [ 'gold' => 999 ]),
];


$enemies[0]->takeDamage(10);

$enemies[0]->takeDamage(5);
$enemies[0]->takeDamage(50);