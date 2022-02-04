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

		require_once 'helper_functions.php';

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

		echo 'It will cost you <strong>'. money($sum) .'</strong>';

	?>

</body>
</html>