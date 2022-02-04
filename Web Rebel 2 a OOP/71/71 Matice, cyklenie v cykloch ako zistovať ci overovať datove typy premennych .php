
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>
	

	<div class="container">
	 <?php           

	$rows = 50;    // 5 riadková piramínda *

	for ( $i = 1; $i <= $rows; $i++ ) {  // kym i bude mensie alebo rovno rows za predpokladu že i sa bude zvyšovať 
		$tmp = '';
		for ( $j = 1; $j <= $i; $j++ ) {  // kym i bude mensie alebo rovno rows za predpokladu že i sa bude zvyšovať 
			$tmp .= ' * ';
	}	
		echo "$tmp<br>";
}
	// odporuča  pozrieť php manial Type Juggling

	echo gettype( $adventure ); // vypise mi array napr
	echo gettype( $adventure[0] ); // 
	echo gettype( $adventure[0]->who ); // string

	//velmi uzitocna funkcia 
	var_dump( $adventure );  // poskytne viac ako  print_r    mozeme aj [1]
?>

	</div>
    
	
	
	
	
	
	<?php  
/*


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
// convert array na object // no v buducnosti bude nato funkcia čo s databazi  vytiahne ako objecty
$adventure = json_encode ( json_encode ( $adventure ) );
echo '<pre>';
print_r($adventure);
echo '</pre>';

?>

<?php           

$rows = 5;    // 5 riadková piramínda 
for ( $i = 1; $i <= $rows ; $i++ ) {  // kym i bude mensie alebo rovno rows za predpokladu že i sa bude zvyšovať 
	echo "<br>";
}

*/   
?>



</body>
</html>


