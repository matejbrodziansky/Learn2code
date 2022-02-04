<?php


  // include
  require 'config.php'; 


  // Enjoy
  $id = $database->insert('items',[           //databaza items po novom vraj takto $id = $database->id();
  'text' => $_POST['message']   // indexte je method post   name text // vysledok tohto bude id v databaze
    
  ]);

  // succes
  if ( $id ) {
 // echo 'yeah, new item added!<br>';
 //echo '<a href="/todoapp">back home</a>';

 // namiesto toho  
  header('location:http://localhost:8888/todoapp/index.php');
 die();
  }


?>


























<!-- 
<p>
    you wrote <strong><?php echo $_POST['message'] ?></strong><br>
</p>
 -->

<?php

  //  $_GET['message'];  // dostanem hodnotu  z message HELLO