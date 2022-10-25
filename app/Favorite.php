<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $fillable = [
        'user_id',
        'thread_id',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function thread()
    {
        return $this->belongsTo('App\Thread');
    }
}
