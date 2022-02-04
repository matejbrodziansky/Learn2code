<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'text', 'slug'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }


    public function getCreatedAtAttribute($value)
    {
        return date('j M Y, G:i', strtotime($value));
    }

    public function getTeaserAttribute()
    {
        // return str_pad($this->text, 300);
        return word_limiter($this->text, 60);
    }

    public function getRitchTextAttribute()
    {
        // return str_pad($this->text, 300);
        return add_paragraphs( filter_url( e($this->text)));
    }

    public function setTitleAttribute($value)
    {
        // $this->attributes['title'] = ucfirst($value);
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

}
