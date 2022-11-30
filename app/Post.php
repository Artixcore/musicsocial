<?php

namespace App;

use Overtrue\LaravelLike\Traits\Likeable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Likeable;

    function users(){
        return $this->belongsTo(User::class);
    }
}
