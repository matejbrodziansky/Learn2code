<?php

//if(isset($_GET['id']) && is_numeric($_GET['id']));
$id = (int)$_GET['id'];


$filename = "products/";
$fileUrl = glob("$filename*", GLOB_ONLYDIR);



?>