<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    function users(){

        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
