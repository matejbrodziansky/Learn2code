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


$rows = 5;
  for( $i = 1; $i <= $rows; $i++ ){
      $tmp = '';
    for( $j = 1; $j <= $i; $j++ ){
      $tmp .=' * ';           //zoberie tmp a prihodí *
    }
    echo "$tmp<br>";
}




?>


 <!-- 


   -->
    
</body>
</html>