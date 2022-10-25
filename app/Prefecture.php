<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\PrefectureController;
use App\Http\Controllers\ThreadController;

class Prefecture extends Model
{
    public function animations(){
        return $this->belongsToMany('App\Animation');
    }
    
    public function getByPrefectures(){
        return $this->orderBy('created_at', 'DESC')->get();
    }
}
