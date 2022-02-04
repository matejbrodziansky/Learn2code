<?php

	include_once "_partials/header.php";


	// create "storage" if no exists
	$file = '_inc/storage';
	mk_file( $file );

	// grab data from it
	$data = file_get_contents( $file );
	$data = json_decode( $data ) ?: [];

	// add new thing, if form was submitted
	if ( ! empty($_POST) )
	{
		$date = time();

		foreach( $_POST['message'] as $message )
		{
			if ( ! $message ) continue;

			array_push( $data, (object) [
				'text' => $message,
				'date' => $date
			]);
		}

		file_put_contents( $file, json_encode( $data ) );
	}

	/**
	 * add item form
	 */
	if ( can_edit() ) {
		include_once '_partials/add-form.php';
	}

?>

	<section class="article-list">
		<?php foreach ( $data as $i => $item ) : $row = ++$i; ?>

			<article class="group <?= get_parity( $row ) ?>">
				<time datetime="<?= date( 'Y-m-d', $item->date ) ?>">
					<?= date( 'j M Y', $item->date ) ?>
				</time>
				<p>
					<?= nl2br( plain($item->text) ) ?>
				</p>
			</article>

		<?php endforeach ?>
	</section>

<?php include_once "_partials/footer.php" ?>