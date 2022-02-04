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

	$rows = 5;

	for ( $i = 1; $i <= $rows; $i++ ) {
		$tmp = '';
		for ( $j = 1; $j <= $i; $j++ ) {
			$tmp .= ' * ';
		}
		echo "$tmp<br>";
	}

	?>

	<div class="row">
	<?php

	$adventure = [
		[
			'who' => 'Finn',
			'wat' => "Finn is a silly kid who wants to become a great hero one day. He might not look too tough, but if there's evil around, he'll slay it. That's his deal."
		],
		[
			'who' => 'Jake',
			'wat' => "Finn's best friend is a wise, old dog with a big heart. Jake has the magical ability to stretch and grow. When evil's not running amok, he plays viola with Lady Rainicorn."
		],
		[
			'who' => 'Ice King',
			'wat' => "Armed with a magic crown and an icy heart, the Ice King has only one goal: to secure a wife by any means necessary.",
			'inventory' => [ 'crown', 'beard', 'Gunther' ]
		],
		[
			'who' => 'PB',
			'wat' => "As a millionaire nerd enthusiast, Princess Bubblegum immerses herself in every branch of geekdom from rocket science to turtle farming."
		],
		[
			'who' => 'Marcy',
			'wat' => "Marceline is a wild rocker girl. Centuries of wandering the Land of Ooo have made her a fearless daredevil."
		],
	];

		$adventure = json_decode( json_encode( $adventure ) );

	?>

		<?php foreach ( $adventure as $dude ) : ?>

			<section>
				<h3><?= $dude->who ?></h3>
				<p><?= $dude->wat ?></p>
			</section>

		<?php endforeach ?>

	</div>

</body>
</html>