<?php

	include_once "_partials/header.php";


	if ( ! empty($_POST) )
	{
		$file = '_inc/storage';
		mk_file( $file);
	}

	$data = [];

	$post = ( object ) [
		'text' => $_POST['message'],
		'time' => time()
	];

	var_dump( json_encode($post));
	
	function push_to_array($data, $post)
	{
		
		$data = func_get_args($data, $post);
		$data = $data;
		print_r($data);
	}
	
	push_to_array($data, $post);

	echo '<pre>';
	print_r ($data);
	echo '<pre>';
	

	//file_put_contents( $file, $post ); // zapiseme do suboru file post mesage ktory prišiel 
	//file_put_contents( $file, json_encode($_data) ); // zapiseme do suboru file post mesage ktory prišiel 
	 file_put_contents( $file, $_POST['message'] ); // zapiseme do suboru file post mesage ktory prišiel 


	include_once'_partials/add-form.php'
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



<!--  


		var_dump( json_encode($post));
	
	function push_to_array($data, $post)
	{
		
		$prd = func_get_args($data, $post);
		print_r($prd);
	}
	
	push_to_array($data, $post);
-->