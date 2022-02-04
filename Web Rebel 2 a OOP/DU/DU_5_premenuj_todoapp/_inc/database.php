<?php


require_once 'vendor/autoload.php';

use Medoo\Medoo;

// connect to db 

$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'adventure',
    'server' => 'localhost',
    'username' => 'root',
    'password' => 'root'
]);

