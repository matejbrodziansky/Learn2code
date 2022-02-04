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
echo '</pre>'


?>
 <!-- 


   -->
    
</body>
</html>