<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
	/**
	 * HOMEPAGE
	 */
	public function home()
	{
		return view('home', [
			'posts' => Post::latest()->get()
		]);
	}


	/**
	 * ABOUT PAGE
	 */
	public function about()
	{
		return view('about');
	}


	/**
	 * CONTACT PAGE
	 */
	public function contact()
	{
		return view('contact');
	}
}
