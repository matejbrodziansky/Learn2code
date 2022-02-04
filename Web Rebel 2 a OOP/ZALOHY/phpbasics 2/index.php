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

	function discount( $selling_price, $discount_percent = 10, $format = FALSE )
	{
		$actual_price = $selling_price - $selling_price * ( $discount_percent / 100 );

		if ( $format )
		{
			$actual_price = money( $actual_price );
		}

		return $actual_price;
	}

	function money( $sum, $currency_symbol = '&euro;' )
	{
		return $currency_symbol.' '.number_format( $sum, 2, ',', '&nbsp;' );
	}

	// ----------------

	$item_count = 15;
	$item_price = 122.30;

	$sum = sum($item_count, $item_price);

	echo "$item_count <strong>x</strong> $item_price <strong>=</strong> $sum";
	echo '<br><br>';

	// discount
	$coupon = 13;

	if ( $coupon )
	{
		$sum = discount( $sum, $coupon );
	}

	echo 'It will cost you <strong>'. money($sum, 'Kč') .'</strong>';

	?>

</body>
</html>