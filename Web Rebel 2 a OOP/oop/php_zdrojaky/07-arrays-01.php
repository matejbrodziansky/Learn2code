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

		$badass = "Brienne of Tarth";
		$arr = [ "Princess Bubblegum", "Imperator Furiosa", $badass, "Bulbasaur" ];

		// show the 2nd one
		// echo $arr[1];


		// add new one to the end
		$arr[] = "Kamala Khan";

		// remove the 4th one
		unset( $arr[3] );

		// append these to the end
		array_push( $arr, "Lyra Belacqua", "April Ryan" );

		// remove from the end
		$who = array_pop( $arr );
		echo $who . '<br>';

		// remove from the start
		$who = array_shift( $arr );
		echo $who ;

		// tsk tsk tsk
		$asshole = 'Donald Trump';
		array_unshift( $arr , $asshole );


		echo '<pre>';
		print_r( $arr );
		echo '</pre>';


		// how many of em biatches is there
		echo count($arr);

	?>

</body>
</html>