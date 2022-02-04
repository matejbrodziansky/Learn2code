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

	echo "\t<p>" . PHP_EOL;
	echo "\t\tYou bought <strong>${item_count} items</strong> for <strong>${item_price}€</strong>." . PHP_EOL;
	echo "\t<p>" . PHP_EOL;

	echo '<blockquote>' . PHP_EOL;
	echo '	<p>' . PHP_EOL;
	echo '		Sucking at something<br>
			is the first step<br>
			to becoming<br>
			sorta good at something.' . PHP_EOL;
	echo '	</p>' . PHP_EOL;
	echo '</blockquote>' . PHP_EOL;

	?>

</body>
</html>