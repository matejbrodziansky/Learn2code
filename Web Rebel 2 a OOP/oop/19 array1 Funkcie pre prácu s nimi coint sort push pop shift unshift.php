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
   $badass,
   "Bullbasaur"
 ]; 
 

 echo $arr[1];'<br>';
 echo $arr[1][0];   //vypíše prvy znak 


 $arr [3] = 'Kamala Khan';
 $arr [ ] = 'Kamala Khan' ; // prídá nový na koniec pola 
 unnset( $arr[3]);          // vyradí z pola ale vznikne diera pri čišlovaní 


 if (count( $arr ) ){ // ak sa podarí niečo vytiahnuť vrati hodnotu vacsiu ak o 0
    //show articel  
 } else {
   // nothing found  
 }

 
 sort($arr);  // usporidajú sa podla abecedy
 rort($arr);  // usporidajú sa podla abecedy reverzne

 arry_push( $arr, "Lyra Balcqua", "Aprial Ryan"); // natkačine ho tam 

 $who = array_pop( $arr ); // vytrhne z konca radu 
 echo $who;  // vypíšeme kto to bol 

 $who = array_ahift( $arr ); // vytrhne zo začiatku 
 echo $who;  // vypíšeme kto to bol 

 $asshole = 'Donald Trump';
 array_unshift( $arr, $asshole ); // prihodí ho na začiatok pola  opak array push
 
 ?>






 <!-- 


   -->
    
</body>
</html>