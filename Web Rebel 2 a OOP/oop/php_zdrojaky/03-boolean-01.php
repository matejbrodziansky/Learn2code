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

		if ( $row % 2 == 0 ) echo 'class="even"';
		else echo 'class="odd'


		if ( $row % 2 == 0 ) {
			echo 'class="even"';
		} else {
			echo 'class="odd';
		}


		if ( true ) {

		}


		if ( is_ajax() ) {

		}


		if ( 1 > 2 ) {

		} else {

		}


		$num = 5;
		$str = "tits";


		if ( $num ) {

		}

		if ( $str ) {

		}


		if ( ! isset($_GET['id']) || empty($_GET['id']) ) {

		}


		if ( ($first_name || $last_name) && ($player_name || $player_age) ) {

		}


		if ($a == $b) {
	        balls();
	    } elseif ($a > $b) {
	        tits();
	    } else {
	        die();
	    }

	?>

</body>
</html>