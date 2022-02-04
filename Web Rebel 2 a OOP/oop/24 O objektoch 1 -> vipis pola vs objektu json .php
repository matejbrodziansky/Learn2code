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

   (object) [      
      'who' => 'Finn',
      'wat' => "Finn je mrdka ",
      'comments' => 4,
    ],

    (object) [      
      'who' => 'Jake',
      'wat' => "The fukcing awesome dog ",
      'comments' => 23,
    ],

    (object) [      
      'who' => 'Mates',
      'wat' => "The bad programmer ",
      'inventory' => [ 'Mackbook', 'Windows'],
      'comments' => 10,

    ],

    (object) [      
      'who' => 'Prd',
      'wat' => "He is fart loudly ",
      'comments' => 44,
    ],

    (object) [      
      'who' => 'Jackie',
      'wat' => "The smallest dog ",
      'comments' => 10,
    ],
];

echo '<pre>';
print_r ( $adventute );
echo '</pre>';

echo '<pre>';
print_r ( $adventute );
echo '</pre>';





foreach ( $adventute as $dude )
{

  var_dump( $dude );
    echo '<article>';
   // echo '<h4>'. $dude['who'] .'</h4>'; // takto sa vypije pole 
    echo '<h4>'. $dude->who .'</h4>'; // takto sa vypije pole 
    echo '<p>'. $dude->wat .'</p>';  // takto vypišeme object 
    echo '</article>';

}


pre


?>


 <!-- 


   -->
    
</body>
</html>