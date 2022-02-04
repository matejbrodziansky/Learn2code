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

		$row = 4;

		if ( $row % 2 == 0 )
		{
			echo 'even';
		}
		else
		{
			echo 'odd';
		}

		echo '<br>';

		$player_one_score = 23;
		$player_two_score = 12;

		if ( $player_one_score > $player_two_score )
		{
			echo 'player ONE wins';
		}
		else
		{
			echo 'player TWO wins';
		}

		echo '<br><br>';


		$player_name = '';

		if ( ! $player_name )
		{
			echo 'enter your name, dumbass!';
		}


		/* $post = get_post();
		if ( ! $post ) {
			// oh no...
		}


		if ( logged_in() )
		{
			// ...
		}
		else
		{
			// oh no...
		}

		if ( ! logged_in() )
		{
			die();
		} */

		$email = '';
		$password = '';


		if ( $email && $password )
		{
			// ...
		}

		/*
			&& and
			|| or
		*/


		if ( !$email || !$password )
		{
			echo 'please enter both<br><br>';
		}


		$key = 'xxxxxx';

		if ( $key == 'up' ) {
			echo 'up';
		}
		else if ( $key == 'left' ) {
			echo 'left';
		}
		else if ( $key == 'right' ) {
			echo 'right';
		}
		else if ( $key == 'down' ) {
			echo 'down';
		}
		else {
			echo 'please press an arrow, maaaan';
		}


	?>

</body>
</html>