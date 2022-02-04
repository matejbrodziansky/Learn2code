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

$badass = "Brianne";

$arr = [
   "Princess",
   "Iperator",
   "Kunda" ,
   "Bullbasaur"
 ]; 
 

echo '<ul class="list-group text-left">';
  foreach ( $arr as  $key => $value ) {          // plna hodnotu zaspisu do kedy sa uloži hodnota 

    echo "<li class=\"list-group-item\">
        <small class=\"text-info\">$key &hellip;</small>
        $value
    </li>";
}
echo '</ul>';

while ( $arr ) {
  //echo array_pop($arr).'<span class="text-warning"> / </span>';
  echo array_pop($arr);
  if ( $arr )echo '<span class="text-warning"> / </span>';  // po vypise sa vypíše posledny array a za nim už nebudem
}



  ?>
 <!-- 


   -->
    
</body>
</html>