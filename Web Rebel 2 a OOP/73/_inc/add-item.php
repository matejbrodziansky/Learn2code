<?php

  // include
  require 'config.php'; 


  // add new stuff
  $id = $database->insert('items',[           //databaza items po novom vraj takto $id = $database->id();
  'text' => $_POST['message']   // indexte je method post   name text // vysledok tohto bude id v databaze
    
  ]);


    header('Content-Type: application/json');  //treba pridávať hlavičku  aby prehliacač vedel druh kodu 


  // succes
  if ( $id ) 
  {
		$message = json_encode([
			'status' => 'success',
			'id' => $id
		]);



		die( $message );
  }

?>



