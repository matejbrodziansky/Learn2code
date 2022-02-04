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
/////////// a) Vyrob funkciu anchor() ///////////
/////////////////////////////////////////////////
echo '<hr>a<hr><br>';


function anchor( $url, $finder )
{

    echo "<a href=\"$url\"> $finder </a>";
    
}

// test
anchor( 'http://bing.hu', 'vyhladavač');


/////////////////////////////////////////////////
//b) Rozsir funkciu anchor() nech je stavnata////
/////////////////////////////////////////////////
echo '<br><br><hr>b<hr><br>';


function anchor_Two( $url, $finder, $atts )
{
    echo "<a href=\"$url\" title=\"$atts[title] \" class=\"$atts[class]\"> $finder </a>";
}

$atts = [
    'title' => 'toto je link',
    'class' => 'red'
];

// test
anchor_Two( 'http://bing.hu', 'vyhladavač', $atts);

///////////////////////////////////////////////// 
////////  c) Funkcia + praca so stringami  //////
/////////////////////////////////////////////////
echo '<br><br><hr>c<hr><br>';

function redirectt( $adress ) {
    $base_url = 'http://localhost/zadanie-08/additional';
    
    if ( strstr($adress, $base_url) && !strstr($adress, '.php') ) {
        return $adress.'.php';
    }
    
    if ( strstr($adress, $base_url) ) {
        return $adress;
    }

    if ( !strstr($adress, '/') && !strstr($adress, '.php') ) {
        return $base_url.'/'.$adress.'.php';
    }
    
    if ( !strstr($adress, '/') ) {
        return $base_url.'/'.$adress;  
    }
    
    if ( !strstr($adress, '.php') ) {
        return $base_url.$adress.'.php';
    }
    
    return $base_url.$adress;
}


function redirect( $adress ) {
    $base_url = 'http://localhost:8888/learn2code/oop/DU/DU10/';
    
    if ( strstr($adress, $base_url) && !strstr($adress, '.php') ) {
        return $adress.'.php';
    }
    
    if ( strstr($adress, $base_url) ) {
        return $adress;
    }

    if ( !strstr($adress, '/') && !strstr($adress, '.php') ) {
        return $base_url.'/'.$adress.'.php';
    }
    
    if ( !strstr($adress, '/') ) {
        return $base_url.'/'.$adress;  
    }
    
    if ( !strstr($adress, '.php') ) {
        return $base_url.$adress.'.php';
    }
    
    return $base_url.$adress;
}

echo $prd = redirect( 'index.php');

/////////////////////////////////////////////////
//////// d) Funkcia + praca s datumom ///////////
/////////////////////////////////////////////////
echo '<br><br><hr>d<hr><br>';

function convert_date( $date,  $countryFormat = FALSE )
{
    if( $countryFormat) {   
        switch ($countryFormat) {
            case us:
                echo $date = date('F jS, Y');  // AMERICA
                break;
            case sk:
                echo $date = date('j.n.Y');  // SLOVAKIA
                break;
            case ja:
                echo $date = date('Y/d/m');  // JAPAN  2021/05/02
                break;
            default:   
                echo " wrong type format  ";
        }
    }
    else{
        echo "Enter the date type of the country. ";
    }   
}

convert_date( '12-28-1982', 'sk' );






/////////////////////////////////////////////////
////////////////////// e  ///////////////////////
/////////////////////////////////////////////////
echo '<br><br><hr>e_1<hr><br>';

// prvy sposob 
function push_to_array_one( )
{   
    $argumets = func_get_args();
    $arr = array();

    foreach( $argumets as $argumet){
         if(is_array($argumet)){
             foreach($argumet as $value){
                $arr[] = $value; 
             }
         }
         else {
             $arr[] = $argumet;
         }
    }
    return $arr;
}

$data = [ 'one', 'two', 'balls' ];

$datas = push_to_array_one($data, 'hovno', 'riť', 'balls');
echo '<pre>';
print_r($datas);
echo '</pre>';

echo '<br><br><hr>e_2<hr><br>';


function push_to_array_two($data )
{

    $arguments = func_get_args();
   // global $data;

    foreach ($arguments as $argument) {
        if (! is_array($argument)) {
            $data[] = $argument;
        }
        
    }
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    return $data;
}

$names = [ 'Mates', 'Silvi', 'Nelly', 'Max' ];

push_to_array_two($names, 'hovno', 'riť', 'balls','yablko');


?>
    
</body>
</html>