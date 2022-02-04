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

	$item_count = 5;
	$item_price = 300;

	echo "I'm a firestarter, <strong>twisted</strong> firestarter."
	echo 'Punk detonator.';


	echo '<p>';
	echo '	I\'m a firestarter, <strong class="adventure">twisted</strong> firestarter. ';
	echo '	Punk detonator.';
	echo '<p>';


	echo '<p>';
	echo '	You bought '. $item_count .' items for '. $item_price .'€.';
	echo '<p>';


	echo '<p>';
	echo "	You bought $item_count items for {$item_price}€.";
	echo "	You bought $item_count items for ${item_price}€.";
	echo "	You bought <strong>$item_count items</strong> for <strong>{$item_price}€</strong>.";
	echo '<p>';


	echo '<blockquote>';
	echo '	<p>';

	echo '		Sucking at something<br>
				is the first step<br>
				to becoming<br>
				sorta good at something.';

	echo '	</p>';
	echo '</blockquote>';

	?>

</body>
</html>