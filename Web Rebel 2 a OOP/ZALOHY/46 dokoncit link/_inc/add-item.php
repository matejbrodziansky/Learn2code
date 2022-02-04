<?php

  // include
  require 'config.php'; 


  // add new stuff
  $id = $database->insert('items',[           //databaza items po novom vraj takto $id = $database->id();
  //$id = $database->insert('items',[           //databaza items po novom vraj takto $id = $database->id();
  'text' => $_POST['message']   // indexte je method post   name text // vysledok tohto bude id v databaze
    
  ]);

  // succes
  if ( $id ) {
    die('success');      //hodnota ktoru mozeme neskor odchytit 

  }


?>



