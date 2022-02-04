<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>php funsies</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body class="container">

	<div class="page-header">
		<h1 class="text-muted">fun times php</h1>
	</div>

	<?php

	function sum( $a, $b )
	{
		return $a * $b;
	}


	function discount( $selling_price, $discount_percent, $format = FALSE ) // ak bude tretia hodnota inak budu dve lebo da false
	{
		$actual_price = $selling_price - $selling_price * ( $discount_percent / 100 );
		
		if ( $format )
		{
			$actual_price = money( $actual_price );
		}
		return $actual_price;
	}

	function money( $sum, $currencry_symbol = '&euro;' )
	{
		return $currencry_symbol. ' ' .number_format( $sum, 2, ',', '&nbsp;' );
	}

	// ----------------

	$item_count = 15;
	$item_price = 122.30;

	$sum = sum($item_count, $item_price);

	echo "$item_count <strong>x</strong> $item_price <strong>=</strong> $sum";
	echo '<br><br>';

	// discount
	$coupon = 13;

	// echo number_format($sum - $sum *($coupon / 100), 2);  hodi čislo na dve desatinne cisla 
	// echo number_format($sum - $sum *($coupon / 100), 2, ',', '&nbsp');  z 1,589.91 bude 1589,91 non breaking space nezalomi sa na dalši riadok  

	if ( $coupon )
	{
		$sum = discount( $sum, $coupon );   // mozeme dopisať true tretiu hodnotu a spraci money
		}

	echo 'It will cost you <strong>'. money($sum) .'</strong>';   // možem dopisa 'kč ' napriklad ako druhu hodnotu 

	?>

</body>
</html>