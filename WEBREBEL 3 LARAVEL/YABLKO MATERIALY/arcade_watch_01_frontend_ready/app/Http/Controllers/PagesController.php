<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{

	public function home()
	{
		return view('welcome', [
			'title' => '(ಠ_ಠ)',
			'posts' => [
				'just like hamburger; exactly like hamburger',
				'the blender who would recite shakespeare',
				'what we might mean when we say a clock is wrong',
			]
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
