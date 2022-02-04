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

$adventute = [
    [      
      'who' => 'Finn',
      'wat' => "Finn je mrdka ",
    ],
    [      
      'who' => 'Jake',
      'wat' => "The fukcing awesome dog ",
    ],
    [      
      'who' => 'Mates',
      'wat' => "The bad programmer ",
      'inventory' => [ 'Mackbook', 'Windows'],

    ],
    [      
      'who' => 'Prd',
      'wat' => "He is fart loudly ",
    ],
    [      
      'who' => 'Jackie',
      'wat' => "The smallest dog ",
    ],
];

foreach ( $adventute as $dude) {
  
  echo "<h3>${dude['who']}</h3>";

  if ( isset($dude['inventory']) && is_array($dude) ){    // ak exist take ako inveroty , a ak to je array 

    foreach ($dude['inventory'] as $item ) {
      echo $item. ', ';
    }

  }
}
echo '<pre>';
print_r($adventute);
echo '</pre>';


echo '<br>';
echo '///////////////////////////////////// 23 ////////////////////////////////////';



foreach ( $adventute as $dude) {
  
  echo "<h3>${dude['who']}</h3>";

  if ( isset($dude['inventory']) && is_array($dude) ){    // ak exist take ako inveroty , a ak to je array 

    echo implode( '. ', $dude['inventory'] );  // prihodí medzi string čiarky možeme pridať akykolvek string 

  }
}


echo '<pre>';
print_r( $_SERVER['SCRIPT_FILENAME'] );  // rozdiel explode nizsie
print_r( explode('/',  $_SERVER['SCRIPT_FILENAME']) );   // premení ho na pole 
print_r( array_filter(explode('/',  $_SERVER['SCRIPT_FILENAME'])) );   // premení ho na pole a vymaže prazdne veci 
echo '</pre>';
echo '***************************************************************************';


$file = explode('/',  $_SERVER['SCRIPT_FILENAME'])[5]; // novší zapis na starych php nepojde 

echo '<pre>';
print_r( explode( '.', $file) );  // rozdeli index.php na pole index a php 
echo '</pre>'; 
echo '***************************************************************************';


$names = "
  Finn
  Jake
  Ice King
  PB
  Marcy
  ";


$names = explode( PHP_EOL, $names );  // vypíše ich na pole 

echo '<pre>';
print_r( $names);
//print_r( trim($names[1]));  // odstrihne tabulatory whitespaces zo začiatku a zboku cely array nemože iba 1 string
print_r( array_map('trim',$names));   // vystrihne v cikle . prebehe kazdu hodnotu a da strim 
echo '</pre>'; 
echo '***************************************************************************';
echo '<br>';
echo '***************************************************************************';
echo '<br>';
echo '***************************************************************************';
echo '<br>';



?>
<?php foreach ( $adventute as $dude) : ?>
    <section>
        <h3><?= $dude['who'] ?></h3>
        <p><?= $dude['wat'] ?></p>
    </section>



<?php endforeach ?>



 <!-- 


   -->
    
</body>
</html>