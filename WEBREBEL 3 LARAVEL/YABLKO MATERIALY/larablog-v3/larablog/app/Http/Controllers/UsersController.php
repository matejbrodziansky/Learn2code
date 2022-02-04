<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
	public function show($id)
	{
		$user = User::findOrFail($id);

		return view('posts.index')
			->with('title', '<small>by</small> '.$user->email)
			->with('posts', $user->posts);
    }
}
