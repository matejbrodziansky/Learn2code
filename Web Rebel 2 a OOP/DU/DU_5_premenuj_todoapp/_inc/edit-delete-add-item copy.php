<?php

	// include
	require 'config.php';



	$page = basename($_SERVER['PHP_SELF'],'.php');
	global $database;
	$affected  = $database->select('items', ['id', 'text']);
	//return $data;


	//add new idem 
	
	if ($page == 'index')
	{
		$id = $database->insert('items', [
			'text' => $_POST['message']
		]);

			// success?
			if ( ! $id ) die('error');

			if ( is_ajax() )
			{
				header('Content-Type: application/json');

				$message = json_encode([
					'status' => 'success',
					'id' => $id
				]);

				die( $message );
			}
			else
			{
				redirect();
			}
	}
    //edit new idem 

	elseif ($page == 'edit')
	{
		$page = 'edit';

		$affected = $database->update('items',
		[ 'text' => $_POST['message'] ],
		[ 'id' => $_POST['id'] ]
		
	);
		// success
		if ( $affected )
		{
			redirect();
		}

	}

	
	elseif ($page == 'delete')
	{
		$page = 'delete';

		$affected = $database->delete('items',
		[ 'id' => $_POST['id'] ]
	);

		// success
		if ( $affected )
		{
			redirect();
		}

	}





			// success
			if ( $affected )
			{
				redirect();
			}




