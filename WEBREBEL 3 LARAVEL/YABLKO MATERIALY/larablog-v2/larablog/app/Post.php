<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title', 'text', 'slug'];

	protected $appends = ['teaser', 'datetime'];


	public function user()
	{
		return $this->belongsTo('App\User');
	}

	/*
	 * A post can belong to many tags
	 */
	public function tags()
	{
		return $this->belongsToMany('App\Tag');
	}


	public function getDatetimeAttribute()
	{
		return date('Y-m-d', strtotime($this->created_at));
	}

	public function getCreatedAtAttribute($value)
	{
		return date('j M Y, G:i', strtotime($value));
	}

	public function getTeaserAttribute()
	{
		return word_limiter( $this->text, 60 );
	}

	public function getRichTextAttribute()
	{
		return add_paragraphs( filter_url( e( $this->text ) ));
	}

}
