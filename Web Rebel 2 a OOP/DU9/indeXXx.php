<?php

	include_once "_partials/header.php";

	// create storage if not exist 
	$file = '_inc/storage';
	mk_file( $file );
	
	$data = file_get_contents( $file );
	$data = json_decode( $data ) ?: [] ;

	//var_dump( json_encode($data) );
	//var_dump( serialize($data) );

	//1 add new thing, if form was submitted
	if (  can_edit() && ! empty($_POST) && $message = trim($_POST['message']) )
	{


		$post = (object) [
			'text' => $message,
			'time' => time()
		];

		array_push ( $data, $post ); // pushneme do data premennej
		file_put_contents( $file, json_encode($data) );   // do suboru file zapiseme post message 

		//var_dump( json_encode($data) );  // zmeni object na string a možeme ho storage 

		//echo time();    //vrati aktualny time  počet sec od 1.1.1970

	}

	if (can_edit() ) {
		include_once'_partials/add-form.php';
	}


	function push_to_array($stack, $something)
{


	$stack = array($stack, $something);

	$stack = json_encode( $stack) ;


	print_r($stack);
	
}

	push_to_array($data, $post);


?>


	<secction class="article list">
		<?php foreach ($data as $i => $item ) : $row = ++$i ?>  <!-- ++$i najprv sa zvyši potom sa vykona akcia  $i++ najprv sa vykona akcia potom zvyši sa hodnoza -->
			
			<article class="<?= get_parity( $row ) ?>">
				<time datetime="<?= date( 'Y-m-d', $item->time) ?></time>">  
					<?= date( 'j M Y G:i', $item->time) ?></time>
				<p><?= nl2br( $item->text ) ?></p>  <!-- z new line budu br elementy miesto enter -->

			</article>
		
		
		<?php endforeach ?>
	</secction>


<?php include_once "_partials/footer.php" ?>