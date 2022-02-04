<?php

// global variables
$base_url = 'http://localhost:8888/learn2code/todoappp';


// connect to db
$database = new medoo([
	'database_type' => 'mysql',
	'database_name' => 'todo',
	'server'        => 'localhost',
	'username'      => 'root',
	'password'      => 'root',
	'charset'       => 'utf8'
]);

