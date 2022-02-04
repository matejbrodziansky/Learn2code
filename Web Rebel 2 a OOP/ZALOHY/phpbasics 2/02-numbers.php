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

		echo 11 / 3;
		echo '<br><br>';

		echo 11 % 3; // modulus
		echo '<br><br>';


		if ( $row % 2 == 0 ) echo 'class="even"';
		else echo 'class="odd'


		$div = 11 / 3;
		echo (int) $div;

		echo '<br><br>';

		$div = (int) 11 / 3;
		echo $div;


		$div = (int) (11 / 3);

	?>

</body>
</html>