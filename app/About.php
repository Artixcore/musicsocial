<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    function about(){
        return $this->belongsTo(User::class);
    }
}
