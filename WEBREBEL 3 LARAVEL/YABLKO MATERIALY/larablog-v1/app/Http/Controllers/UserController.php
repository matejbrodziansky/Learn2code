<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
	public function getLogin()
	{
		return view('login');
    }

	public function getRegister()
	{
		return view('register');
	}
}
