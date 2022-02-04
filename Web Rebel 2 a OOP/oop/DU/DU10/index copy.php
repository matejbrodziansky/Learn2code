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

/////////////////////////////////////////////////
////////////////////// a  ///////////////////////
/////////////////////////////////////////////////
echo '<hr>';
echo 'a';
echo '<hr>';

function dumb() {
    echo 'Ahoj , Trulo';
}

dumb();

/////////////////////////////////////////////////
echo '<br>';
echo '<br>';


function dumb_two( $data ) {
    echo 'Ahoj, '. $data .' Trulo';
}

dumb_two( Jebo );


/////////////////////////////////////////////////
////////////////////// b  ///////////////////////
/////////////////////////////////////////////////
echo '<hr>';
echo 'b';
echo '<hr>';


function type_array( $data )
{

    echo '<pre>';
    print_r( $data);
    echo '<pre>';
    

}


$adventure = [

    [      
      'who' => 'Finn',
      'wat' => "Finn je mrdka ",
      
    ],
 
     [      
      'who' => 'Jake',
      'wat' => "The fukcing awesome dog ",
      
     ]
];

    type_array( $adventure);
   // type_array(['web', 'gule', 'vajcia'] );

/////////////////////////////////////////////////
////////////////////// c  ///////////////////////
/////////////////////////////////////////////////
echo '<hr>';
echo 'c';
echo '<hr>';

$names = [

         
    [      
        'who' => 'Nelly',        
    ],

    [      
        'who' => 'Jackie',    
    ],

    [      
        'who' => 'Max',
    ],
   
  ];


function create_links_from_array( $data )
{

    foreach ($data as $key => $value) {
        foreach ($value as $name) {
         echo '<a href="'. $name .'.php?page='.$key .'" >'. $name .' </a>';
        }
    }
}

create_links_from_array( $names);

/////////////////////////////////////////////////
////////////////////// d  ///////////////////////
/////////////////////////////////////////////////
echo '<hr>';
echo 'd';
echo '<hr>';

$sum_product = 5;
$price_of_one = 300;

function how_much( $data, $data_two )
{

    $sum = $data * $data_two;

    return $sum;
}


echo '<p>kúpil som si '.$sum_product.' za '. how_much( $sum_product, $price_of_one). ' € dokopy</p>';

/////////////////////////////////////////////////
////////////////////// e  ///////////////////////
/////////////////////////////////////////////////
echo '<hr>';
echo 'e';
echo '<hr>';
echo '<br>';

function  bigger_number($numberOne, $numberTwo)
{
    
    echo $biggestNumber = ( $numberOne > $numberTwo) ? $numberOne : $numberTwo ;
}

$numberOne = 4;
$numberTwo = 3;

bigger_number( $numberOne, $numberTwo);

/////////////////////////////////////////////////
////////////////////// f  ///////////////////////
/////////////////////////////////////////////////
echo '<hr>';
echo 'f';
echo '<hr>';
echo '<br>';


$numbers = [
    
    
    [      
        'howmany' => '2',        
    ],
    [      
        'howmany' => '2',        
    ],
    [      
        'howmany' => '3',        
    ],   
    [      
        'howmany' => '3',        
    ],   
];


function get_sum( $data )
{
    
    $count = 0;
    
    foreach ($data as $dude ) {
        
        $count = $count + $dude['howmany'];
        
    }
    
    return $count;  // vrati von z funkcie 
};

$y = get_sum($numbers); 
echo $y;


/////////////////////////////////////////////////
////////////////////// g  ///////////////////////
/////////////////////////////////////////////////
echo '<hr>';
echo 'g';
echo '<hr>';
echo '<br>';

$words = [ 'Jedna', 'Dva', 'Tri', 'Štyri', 'Five', 'šesť'];


    function get_every_second( $array)
{
    $items = count($array);
    for ($i=0; $i < $items; $i++) { 
        if ( $i % 2 == 1 ) {
        //if ( $i % 2 == 0 ) {
            echo '<li>'.$array[$i].'</li>';
        }
    }
}
    get_every_second( $words);





?>
    
</body>
</html>