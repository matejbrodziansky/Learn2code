<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>fun times php</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body class="container">

	<div class="page-header">
		<h1 class="text-muted">fun times php</h1>
	</div>

	<?php

		require_once 'inc/Adventure.php';
		require_once 'inc/Dude.php';

		$adventure = new Adventure();

		$adventure->addDude(
			new Dude('Finn', 'Finn is a silly kid who wants to become a great hero one day. He might not look too tough, but if there\'s evil around, he\'ll slay it. That\'s his deal.', 4, 'robiť to čo chcem')
		);

		$adventure->addDude(
			new Dude('Jake', "Finn's best friend is a wise, old dog with a big heart. Jake has the magical ability to stretch and grow. When evil's not running amok, he plays viola with Lady Rainicorn.", 23, 'Hainzenberg')
		);

		$adventure->addDude(
			new Dude('Ice King', 'Armed with a magic crown and an icy heart, the Ice King has only one goal: to secure a wife by any means necessary.', 10, 'cnc programovanie')
		);

		$adventure->addDude(
			new Dude('Nelly', 'The very dangerous agresive dog which bite our stupid complexed neighbor, so nevermind, 
			she probably deserved it, maybe it is happen again  ', 10,  'Je to piča')
		);

	?>

	<div class="row">
	<?php

		foreach ( $adventure->getDudes() as $dude )
		{
			echo '<article>';
			echo '	<h4>'. $dude->who .'</h4>';
			echo '	<p>'. $dude->wat.'<p>';
			echo '	<p>Comment ['. $dude->commentsText .']<p>';
			echo '</article>';
		}

	?>
	</div>

	<div class="row">
		<p>
			number of dudes: <strong><?php echo $adventure->dudeCount() ?></strong><br>
			number of comments: <strong><?php echo $adventure->commentCount() ?></strong>
			number of comments: <strong><?php echo $adventure->commentsText() ?></strong>
		</p>
	</div>

</body>
</html>