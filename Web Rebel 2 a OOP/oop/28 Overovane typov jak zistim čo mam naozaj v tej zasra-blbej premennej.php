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


$adventure = [

   [      
     'who' => 'Finn',
     'wat' => "Finn je mrdka ",
     'comments' => 4,
   ],

    [      
     'who' => 'Jake',
     'wat' => "The fukcing awesome dog ",
     'comments' => 23,
   ],

    [      
     'who' => 'Mates',
     'wat' => "The bad programmer ",
     'inventory' => [ 'Mackbook', 'Windows'],
     'comments' => 10,

   ],

    [      
     'who' => 'Prd',
     'wat' => "He is fart loudly ",
     'comments' => 44,
   ],

    [      
     'who' => 'Jackie',
     'wat' => "The smallest dog ",
     'comments' => 10,
   ],
];




// dobre je si pozrieť type jugling

$adventure = json_decode(json_encode($adventure) );

echo gettype($adventure[0]->who);

var_dump($adventure);




?>


 <!-- 


   -->
    
</body>
</html>