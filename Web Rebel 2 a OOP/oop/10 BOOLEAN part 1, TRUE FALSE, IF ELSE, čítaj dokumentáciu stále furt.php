<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- 
     intiger cele čišla
     float desatinne čišla
  -->

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

  ?>
    
</body>
</html>