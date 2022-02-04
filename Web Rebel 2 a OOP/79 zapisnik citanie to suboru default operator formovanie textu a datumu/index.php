<?php

	include_once "_partials/header.php";

	// create storage if not exist 
	$file = '_inc/storage';
	mk_file( $file );
	
	$data = file_get_contents( $file );
	$data = json_decode( $data ) ?: [] ;

	var_dump( $data );

	//1 add new thing, if form was submitted
	if ( ! empty($_POST) )
	{


		$post = (object) [
			'text' => $_POST['message'],
			'time' => time()
		];

		array_push ( $data, $post ); // pushneme do data premennej
		file_put_contents( $file, json_encode($data) );   // do suboru file zapiseme post message 

		//var_dump( json_encode($data) );  // zmeni object na string a možeme ho storage 

		//echo time();    //vrati aktualny time  počet sec od 1.1.1970

	}

?>

	<form id="add-form"  action="" method="post">
		<p class="form-group text">
			<textarea placeholder="what the fuck" name="message"  rows="3"></textarea>
		</p>
		<p class="form-group submit-button">
			<input type="submit" name="submited" value=" get out of my head">
		</p>
	</form>


	<secction class="article list">
		<?php foreach ($data as $i => $item ) : $row = ++$i ?>  <!-- ++$i najprv sa zvyši potom sa vykona akcia  $i++ najprv sa vykona akcia potom zvyši sa hodnoza -->
			
			<article class="<?= get_parity( $row ) ?>"> q
				<time datetime="<?= date( 'Y-m-d', $item->time) ?></time>">  
					<?= date( 'j M Y G:i', $item->time) ?></time>
				<p><?= nl2br( $item->text ) ?></p>  <!-- z new line budu br elementy miesto enter -->

			</article>
		
		
		<?php endforeach ?>
	</secction>


<?php include_once "_partials/footer.php" ?>