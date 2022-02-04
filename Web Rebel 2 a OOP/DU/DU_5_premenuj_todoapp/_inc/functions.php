<?php

// global functions
function show_404()
{
	header("HTTP/1.0 404 Not Found");
	include_once "404.php";
	die();
}

function get_item()
{
	// if we have no id, or if id is empty
	if ( ! isset($_GET['id']) || empty($_GET['id']) ) {
		return false;
	}

	global $database;

	$item = $database->get("items", "text", [
		"id" => $_GET['id']
	]);

	if ( ! $item ) {
		return false;
	}

	return $item;
}


function is_ajax()
{
	return ( !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
		 strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest' );
}



function add_something()
{
	global $database;
	$data = $database->select('items', [ 'id', 'text' ]);

	if ( ! $data){
		echo '<p class="add-something">ADD SOMETHING </p>';
	 }
}


function redirect()
{
	global $base_url;
	header("Location: $base_url/index.php");
	die();

}


function typeglob()
{


 $file = basename($_SERVER['PHP_SELF'],'.php');
 //if ($file == $file){

	 echo '<pre>';
	 print_r($file);
	 echo '</pre>';
 //}
 

}



function hovno ()
{
	if ( $file == $file )
	$affected = $database->delete('items',
	[ 'id' => $_POST['id'] ]
);


}