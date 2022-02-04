<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	/**
	 * Get the author of the comment;
	 */
	public function user()
	{
		return $this->belongsTo('App\User');
	}

	/**
	 * Get post this comment belongs to.
	 */
	public function post()
	{
		return $this->belongsTo('App\Post');
	}
}
