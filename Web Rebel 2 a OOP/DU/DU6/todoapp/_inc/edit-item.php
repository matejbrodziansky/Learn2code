<?php

  // include
  require 'config.php'; 


    die('heloo wdaaw ad adaw');



  // edit item 
  $affected = $database->update ('items',           //databaza items po novom vraj takto $id = $database->id();
    [ 'text' => $_POST['choice'] ],   // indexte je method post   name text // vysledok tohto bude id v databaze
    [ 'id' => $_POST['id']]
  );


  /*
  // edit item 
  $affected = $database->update ('items',           //databaza items po novom vraj takto $id = $database->id();
    [ 'text' => $_POST['message'] ],   // indexte je method post   name text // vysledok tohto bude id v databaze
    [ 'id' => $_POST['id']]
  );
*/
  // succes
  if ( $affected ) {
   // die('success');      //hodnota ktoru mozeme neskor odchytit 
    header( "Location:  $base_url/index.php" );
    die();

  }


?>



