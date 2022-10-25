<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animation extends Model
{
    public function prefectures (){
        return $this->belongsToMany('App\Prefectures');
    }
    public function tags (){
        return $this->belongsToMany('App\Tag');
    }
    public function users (){
        return $this->belongsToMany('App\User');
    }
    public function thread(){
        return $this->belongsTo('App\Thread');
    }
}
