<?php

  // include
  require 'config.php'; 





  // delete item 
  $affected = $database->delete('items',           //databaza items po novom vraj takto $id = $database->id();
    [ 'id' => $_POST['id']]
  );

  // succes
  if ( $affected ) {
   // die('success');      //hodnota ktoru mozeme neskor odchytit 
    header( "Location:  $site_url/index.php" );
    die();

  }


?>



