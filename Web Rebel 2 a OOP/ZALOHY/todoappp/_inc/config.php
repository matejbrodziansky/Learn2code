<?php




    // require stuff
    require_once 'vendor/autoload.php';

    //global variables
    $base_url = 'http://localhost:8888/learn2code/todoapp';
    


    // Using Medoo namespace    
    use Medoo\Medoo;

    //conect to db
    $database = new Medoo([
        'database_type' => 'mysql',
        'database_name' => 'todo',
        'server' => 'localhost',
        'username' => 'root',
        'password' => 'root',

    ]);

// global functions 
require_once 'functions.php';