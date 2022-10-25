<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function animations () 
    {
        return $this->belongsToMany('App\Animation');
    }
}
