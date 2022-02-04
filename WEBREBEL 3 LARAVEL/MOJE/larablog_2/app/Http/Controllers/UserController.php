<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('login');
        
    }
    public function login()
    {
        // return view('login');
        return view('login');
        
    }

    public function register()
    {
        return view('register');
    }

    public function getIndex()
    {
        return 'hovno';
    }
}
