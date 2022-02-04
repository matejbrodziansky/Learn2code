<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


  <?php  
    $item_count = 5 ;
    $item_price = 300 ;
    
    echo 11 / 3;
    echo '<br>';
    
    //$div = 11 / 3;
    $div =(int)( 11 / 3);
    echo (int) $div; // casting float na intiger
    
    
    $row = 5;
    
    if ( $row % 2 ==0 ) {
      echo 'class="even"';
    } else {
      echo 'class="odd"';
    } 
    
    $player_name = 'kokotko';
    
    if ( $player_name )
    {
      echo "Let's game";
    } else 
    {
      echo 'Insert the fucking name bro';
    }

    

    $player_name = '0';
    
    if ( ! $player_name )  // vykičnik otača pravdivosť 
    {
      echo 'Insert the fucking name bro';
    }
    
$post = get_post();
if (! $post) {
   //oh noo.. 
}

  if (logged_in() )
  {

  }
  else
  {

  }

  if( ! logged_in() )
  {
    die();
  }

  if ( $email && $password )
  {
    //...
  }
  
  if ( ! $email || $password )
  {
    echo 'zadaj to ty kunda';
  }

  if ( (!$email || !$password) && $player_name || !logged_in() ) //necitatelne 
  {

  }

  $key = 'down';

  if ( $key == 'up') {
    echo 'up';
  }
  else if ( $key == 'left' ) {
    echo 'left';
  }
  else if ( $key == 'right' ) {
    echo 'right';
  }
  else if ( $key == 'down' ) {
    echo 'down';
  }
  else {
    echo 'please press an arrow, maaaan';
  }


    ?>
    
</body>
</html>


    <!-- 
         intiger cele čišla
         float desatinne čišla

         || alebo
         && end
      -->