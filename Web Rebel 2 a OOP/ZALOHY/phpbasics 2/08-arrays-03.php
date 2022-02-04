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

		// tsk tsk tsk
		$asshole = 'Donald Trump';
		$arr = [ $asshole, 'Imperator Furiosa', 'Brienne of Tarth', 'Kamala Khan', 'Lyra Belacqua' ];


		// unset( $arr[2] );
		// $arr = array_values($arr);

		$arr[2] = '';
		$arr = array_values(array_filter($arr));


		echo '<pre>';
		print_r( $arr );
		echo '</pre>';


		// while loopin'
		// while ( $arr ) {
		// 	echo array_pop($arr);
		// 	if ( $arr ) echo ' <span class="text-warning">/</span> ';
		// }


		// foreachin'
		echo '<ul class="list-group text-left">';
			foreach ($arr as $key => $value) {
				if ( ! $value ) continue;
				echo "<li class=\"list-group-item\"><small class=\"text-info\">$key &hellip;</small> $value</li>";
			}
		echo '</ul>';


		// for fuck's sakin'
		echo '<div class="alert alert-danger" role="alert">';
			for ( $i = 0; $i < count($arr); $i++) {
				if ( ! isset($arr[$i]) ) continue;
				echo '<p>'. $arr[$i] .'<p>';
			}
		echo '</div>';

	?>

</body>
</html>