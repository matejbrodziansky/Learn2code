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

		$items = 5;

		echo $items;
		echo '<br>';

		// add new item to basket
		$items = $items + 1;

		/*
		$items += 2;
		$items += 3;

		$items++;
		++$items;
		*/


		echo $items;
		echo '<br><br>';


		$item_count = 5;
		$item_price = 300;

		// echo $item_count * $item_price;

		$sum = $item_count * $item_price;
		echo $sum;

	?>

</body>
</html>