<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;


class UserController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);

        // return $user->posts;

        return view('posts.index')
            ->with('title', $user->name )
            ->with('posts', $user->posts);
    }
}
