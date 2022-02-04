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

function sum( $a, $b )
{
  return $a * $b ;
}


function discount( $selling_price, $discount_percent)
{
    $actual_price = $selling_price - $selling_price * ($discount_percent / 100);
     return $actual_price ;

}

function money( $sum )
{
  return number_format($sum, 2, ',', '&nbsp;');  //&nbsp
}


$item_count = 15 ;
$item_price = 122.30 ;

$sum = sum( $item_count, $item_price);
echo "$item_count <strong>x</strong> $item_price <strong>=</strong> $sum";
echo '<br><br>';

//  discount
$coupon = 13;

if ( $coupon )
{

  $sum = discount( $sum, $coupon );

}


echo 'It will cost you <strong>'.  money($sum) . '</strong>';

?>
 <!-- 


   -->
    
</body>
</html>