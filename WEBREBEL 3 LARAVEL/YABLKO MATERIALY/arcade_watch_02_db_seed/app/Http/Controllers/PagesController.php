<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{

	public function home()
	{
		return view('welcome', [
			'title' => '(ಠ_ಠ)',
			'posts' => Post::all(),
		]);
	}


	public function about()
	{
		return view('about');
	}


	public function contact()
	{
		return view('contact');
	}
}


/* return view('welcome', [
	'title' => '(ಠ_ಠ)',
	'posts' => Post::all()->pluck('title'),
]); */
