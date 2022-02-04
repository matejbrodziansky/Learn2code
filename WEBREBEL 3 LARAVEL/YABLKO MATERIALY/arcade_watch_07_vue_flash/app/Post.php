<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	/**
	 * Get the author of the blog post.
	 */
	public function user()
	{
		return $this->belongsTo('App\User');
	}

	/**
	 * Get the comments of this post.
	 */
	public function comments()
	{
		return $this->hasMany('App\Comment')->latest();
	}
}
