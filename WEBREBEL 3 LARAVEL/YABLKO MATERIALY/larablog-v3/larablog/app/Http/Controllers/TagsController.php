<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TagsController extends Controller
{
	public function show($id)
	{
		$tag = Tag::findOrFail($id);

		return view('posts.index')
			->with('title', "&ldquo;{$tag->tag}&rdquo;")
			->with('posts', $tag->posts);
    }
}
