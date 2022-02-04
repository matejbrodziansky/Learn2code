<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}


	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request)
	{
		$request->validate([
			'text' => 'required',
			'post_id' => 'required|integer|exists:posts,id',
		]);

		$comment = auth()->user()->comments()->create(
			$request->all()
		);

		return redirect('/posts/' . $comment->post->slug . '#comments')
			->with('flash', 'you totally commented');
	}


	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, Comment $comment)
	{
		$this->authorize('update', $comment);

		$comment->text = $request->text;
		$comment->save();

		// TODO: mozno neukazovat?
		if ($request->expectsJson()) {
			return response(['status' => 'Comment updated!']);
		}
	}


	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Request $request, Comment $comment)
	{
		$this->authorize('update', $comment);

		$comment->delete();

		// TODO: radsej neukazovat?
		if ($request->expectsJson()) {
			return response(['status' => 'Comment deleted!']);
		}
	}
}
