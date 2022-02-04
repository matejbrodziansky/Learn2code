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
echo '<br><br>';

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

dumb_two( silvi );


/////////////////////////////////////////////////
////////////////////// b  ///////////////////////
/////////////////////////////////////////////////
echo '<br><br>';
echo '<hr>';
echo 'b';
echo '<hr>';
echo '<br><br>';


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
/////////////////////////////////////////////////
////////////////////// c  ///////////////////////
/////////////////////////////////////////////////
echo '<br><br>';
echo '<hr>';
echo 'c';
echo '<hr>';
echo '<br><br>';

$names = [ 'silvi',' web', 'gule', 'vajcia' ];


function create_links_from_array( $data )
{

    foreach ($data as $key => $value) {
        
         echo "<ul><li>";
         echo '<a href="'. $value .'.php?page='. ucwords($value) .'" >'. ucfirst($value) .' </a>';
         echo "</li></ul>";
        
    }
}

create_links_from_array( $names);

/////////////////////////////////////////////////
////////////////////// d  ///////////////////////
/////////////////////////////////////////////////
echo '<br><br>';
echo '<hr>';
echo 'd';
echo '<hr>';
echo '<br><br>';

$sum_product = 5;
$price_of_one = 5;

function how_much( $data, $data_two )
{

    $sum = $data * $data_two;

    return $sum;
}


echo '<p>kúpil som si '.$sum_product.' za '. how_much( $sum_product, $price_of_one). ' € dokopy</p>';

/////////////////////////////////////////////////
////////////////////// e  ///////////////////////
/////////////////////////////////////////////////
echo '<br><br>';
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
echo '<br><br>';
echo '<hr>';
echo 'f';
echo '<hr>';
echo '<br><br>';


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
echo '<br><br>';
echo '<hr>';
echo 'g';
echo '<hr>';
echo '<br><br>';

$words = [ 'Jedna', 'Dva', 'Tri', 'Štyri', 'Five', 'šesť'];


Function get_every_second( $array)
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


/////////////////////////////////////////////////
////////////////////// h  ///////////////////////
/////////////////////////////////////////////////
echo '<br><br>';
echo '<hr>';
echo 'h';
echo '<hr>';
echo '<br><br>';




$numeros = [ '3', '20' , '19' , '44', '13' ];

function get_biggest($data)
{
    $b = 0;
    
    
    foreach ($data as $key => $value) {
        
        if ( $value > $b ) {
            $b = $value;
        }        
    } 
    echo $b;
}

echo   $biggest =  get_biggest( $numeros);


/////////////////////////////////////////////////
////////////////////// i  ///////////////////////
/////////////////////////////////////////////////
echo '<br><br>';
echo '<hr>';
echo 'i';
echo '<hr>';
echo '<br><br>';

function change_number( $data)
{
    $data= number_format($data, 2, ',', ' ').'€';
    // echo $data = "$data €";  // funguje tiež 
    return $data;
    
}

$cislo = 15321.35;

echo $zmena = change_number( $cislo);

/////////////////////////////////////////////////
////////////////////// j  ///////////////////////
/////////////////////////////////////////////////
echo '<br><br>';
echo '<hr>';
echo 'j';
echo '<hr>';
echo '<br><br>';


function discout( $amount, $discount)
{
    $discounAmount = ($amount * $discount)/100;
    
    return $discounAmount;    
}

$suma = 124.12;
$zlava = 13 ; // %   142,12 /100

 echo $price = change_number(discout( $suma, $zlava));


?>
    
</body>
</html>