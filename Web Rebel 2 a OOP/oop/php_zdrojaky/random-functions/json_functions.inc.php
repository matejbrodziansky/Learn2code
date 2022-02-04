<?php

/**
 * pre_r
 * @param  [type]  $expression [description]
 * @param  boolean $return     [description]
 * @return [type]              [description]
 */
function pre_r($expression, $return = false)
{
	if ($return)
	{
	  if (is_string($expression)) return '<pre>' . print_r(str_replace(array('<','>'), array('&lt;','&gt;'), $expression), true) . '</pre>';
		return '<pre>' . print_r($expression, true) . '</pre>';
	}
	else
	{
		echo '<pre>';
		if (is_string($expression)) print_r(str_replace(array('<','>'), array('&lt;','&gt;'), $expression), false);
		else print_r($expression, false);
		echo '</pre>';
	}
}



/**
 * send_success_message
 * @return [type] [description]
 */
function send_success_message()
{
	$output['message'] = 'OK';
	$message = json_encode($output);

	header('Content-Length: ' . strlen($message));
	header('Content-Type: application/json');
	echo $message;
	die();
}



/**
 * send_failure_message
 * @return [type] [description]
 */
function send_failure_message()
{
	$output['message'] = 'Message not found';
	$message = json_encode($output);

	header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
	header("Status: 404 Not Found");
	echo $message;
	die();
}



// ----------------------------------
// GET MESSAGE DATA

$method = $_SERVER['REQUEST_METHOD'];
if ($method == "PUT" || $method == "DELETE")
{
	$data = json_decode(file_get_contents('php://input'));

	if ( $method == "PUT" ) {
		// insert OR update
		// update: if version is higher
	}
	else if ( $method == "DELETE" ) {
		// delete message
		// delete: only if version is the same
	}
}

@file_put_contents('result.txt', pre_r( $data, 1 ));

if ( $data ) {
	send_success_message();
} else {
	send_failure_message();
}