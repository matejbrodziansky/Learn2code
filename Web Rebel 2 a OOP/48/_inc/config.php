<?php


    //show all errors
    ini_set('display_startup_errors', 'On');
    ini_set('display_errors', 'On');
    error_reporting(-1);


    // require stuff
    require_once 'vendor/autoload.php';

    //global variables
    $base_url = 'http://localhost:8888/learn2code/48';
    
   // \php_error\reportErrors();
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();

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

   // echo '<pre>';
   // print_r ( $database->info());
   // echo '</pre>';  