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

for ( $i = 0; $i < count($arr); $i++ ) {  //sklada sa z troch časti, trochj tvrdení ktore su oddelene ;  prva sekcia premenne iterator , druha čas dokedy sa budeme točiť, dokym i bude menšie ako počet prvkov v poli, tretia sekcia čo sa stane po kazdej iteracii 
  echo '<p>'. $arr[$i] . '</p>';  // vypíše sa nam kazda hodnota 

}
//treba dať pozor ked mažeme hodnoty key . bude problem pri vypísaní 1 2  4  on si zarata aj 3 prechod do iteracii 
//možeme prepočítať
$arr = array_values( $arr);  // prepočíta

//niekedy sa može stať ťe hodnota bude prazna
$arr[2] = '';    
//riešnie
if ( ! $value ) continue; // dvojku preskoči  musi byť ale vo for 
if ( ! $value ) break; // koniec cyklu vyskoči von  

$arr = array_filter($arr); // odfiltruje prazdne hodnoty // hodne preštudovanie v dokumentacii //dokaže kadejako odfiltrovať ako by sme chceli 
$arr = array_values(array_filter($arr)); // odfiltruje aj prepočíta 









// for ( $i = 1; $i <= 1000; $i++ ) {  //vypise po 1
//   echo '<p>'. $i . '</p>';  //  

// }

// for ( $i = 1; $i <= 1000; $i += 3 ) {   // pridáva po 3
//   echo '<p>'. $i . '</p>';

// }

  ?>
 <!-- 


   -->
    
</body>
</html>