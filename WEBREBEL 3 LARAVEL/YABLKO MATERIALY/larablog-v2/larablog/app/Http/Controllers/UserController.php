<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
	public function show($id)
	{
		$user = User::findOrFail($id);

		return view('post.index')
			->with('title', $user->email)
			->with('posts', $user->posts);
	}
}
