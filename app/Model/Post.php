<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function tags()
    {
        return $this->belongsToMany('App\Model\Tag');
    }

    public function category()
    {
        return $this->belongsTo('App\Model\Category');
    }

    public function admin()
    {
        return $this->belongsTo('App\Admin');
    }

    public function comments()
    {
        return $this->hasMany('App\Model\Comment');
    }

    public function likes()
    {
        return $this->hasMany('App\Model\Like');
    }

    public function dislikes()
    {
        return $this->hasMany('App\Model\Dislike');
    }

    public function getTitleAttribute($value)
    {
        return ucfirst($value);
    }
}
