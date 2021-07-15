<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public function posts()
    {
        return $this->hasMany('App\Model\Post');
    }
    public function getNameAttribute($value)
    {
        return ucwords($value);
    }
}
