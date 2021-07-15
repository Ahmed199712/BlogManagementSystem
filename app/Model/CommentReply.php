<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CommentReply extends Model
{
    public function comment()
    {
        return $this->belongsTo('App\Model\Comment');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
