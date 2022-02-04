<?php

	require_once '_inc/config.php';

	if ( ! $item = get_item() ) {
		show_404();
	}

	include_once "_partials/header.php";

	require_once "_partials/form.php";

 	include_once "_partials/footer.php" ?>