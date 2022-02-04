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

		// ulozime hodnoty do premennych
		$item_count = 5;
		$item_price = 350;

		$number_one = 7;
		$number_two = 7;

		if ( $number_one > $number_two) 
		{
			echo 'čišlo jedna je vacšie ';
			echo '<br>';
		} elseif ( $number_one < $number_two)
		{
			echo 'čišlo dva je vacsie ';
			echo '<br>';
		} else 
		{
			echo 'číšla sa rovnajú';
			echo '<br>';
		}
		$word_one = 'jedna';
		$word_two = 'dva';

		if ( $word_one < $word_two) 
		{
			echo 'slovo jedna je vacšie ';
			echo '<br>';
		} elseif ( $word_one > $word_two)
		{
			echo 'slovo dva je vacsie ';
			echo '<br>';
		} else 
		{
			echo 'slová sa rovnajú';
			echo '<br>';
		}




		$number = 5;
		$min = 6;

		if ( $number > $min) 
		{
			echo 'ta kurva je fakt väčšia';
		} else 
		{
			echo 'this kár je manši ';
			echo '<br>';
		}
		



		// vynasobime ich a vysledok ulozime do premennej $sum
		$sum  = $item_count * $item_price;

		// premennu $sum vypiseme na stranku
		// cize na stranke sa objavi cislo
		echo $sum;

		?>


</body>
</html>