<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tag;


class TagController extends Controller
{
    public function show($id)
    {
        $tag = Tag::findOrFail($id);

        // return $user->posts;

        return view('posts.index')
            ->with('title', $tag->name )
            ->with('posts', $tag->posts);
    }
}
