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

/*
  // $message = [
  //   'status' => 'succces',
  //   'id' => 15
   ];



  // ked potrebujem manipolovať s samotnou koleckciou že zmeniť kluče alebo otoči to cele naopak alebo vysknuť kluč alebo rad transofmovať tak šikovné budu polia 
  // ak len vytiahnuť data z databazy a vypisať na stranku tak lepší je objecť z toho titulu že je krajši 


  //druhý spôsob od toho nizsie ale neodporúča sa je o niečo pomalsí pre počítač 
  $obj = new stdClass;
  $obj->who = 'Finn';
  $obj->wat = 'Finn is farting shitting pissing ';
  $obj->boy = true;

  echo '<pre>';
  print_r ( $obj );
  echo '</pre>';
  echo '<hr>';




  //prvy sposob ako najjednoduhši je vytvoriť obyčaj aaray a castnuť ho na objext
  $message = [
    'status' => 'succces',
    'id' => 15
  ];

$json = json_encode( $message );


echo '<pre>';
print_r ( $message );
print_r ( $json );
echo '</pre>';


$message = json_decode( $json );

echo '<pre>';
print_r ( $message );
echo '</pre>';

echo $message->status.'<br>';
echo $message->id.'<hr>';
*/



$adventute = [

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


$adventute = json_decode( json_encode( $adventute));

echo '<pre>';
print_r( $adventute );  // vytvorí nám object 
echo '</pre>';



?>


 <!-- 


   -->
    
</body>
</html>