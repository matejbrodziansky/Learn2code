<?php

$page_name =  basename($_SERVER['SCRIPT_NAME'], '.php');
if ($page_name == 'index') $page_name = 'Home';

$page = glob('*.php');


