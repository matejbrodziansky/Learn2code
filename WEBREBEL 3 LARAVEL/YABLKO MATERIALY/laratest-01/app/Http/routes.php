<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


get('/', function() {
	$text = '(ﾉﾟ0ﾟ)ﾉ~';
	$data = [1, 2];
	return view('welcome', compact('text', 'data'));
});


get('about', function() {
	$text = '...bacon bacon pancakes';
	return view('about')
		->with('text', $text);
});


get('contact', function() {
	$text = 'what you want from me?';
	return view('contact')->withText($text);
});