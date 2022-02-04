<?php

	include_once "_partials/header.php";

	//1
	if ( ! empty($_POST) )
	{
		$file = '_inc/storage';
		mk_file( $file );

		$data = [];

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


<?php include_once "_partials/footer.php" ?>