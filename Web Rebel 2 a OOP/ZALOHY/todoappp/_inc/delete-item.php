<?php

  // include
  require 'config.php'; 





  // delete item 
  $affected = $database->delete('items',           //databaza items po novom vraj takto $id = $database->id();
    [ 'id' => $_POST['id']]
  );


	// success
	if ( $affected ) {
		redirect('/');
	}


?>



