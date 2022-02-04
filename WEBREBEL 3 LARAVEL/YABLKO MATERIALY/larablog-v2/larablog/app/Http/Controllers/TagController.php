<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
	public function show($id)
	{
		$tag = Tag::findOrFail($id);

		return view('post.index')
			->with('title', $tag->tag)
			->with('posts', $tag->posts);
	}
}
