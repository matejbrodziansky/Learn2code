<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	/**
	 * Get the route key for the model.
	 */
	public function getRouteKeyName()
	{
		return 'slug';
	}

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
