<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\CommentController;

class Thread extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'body',
    ];
    
    
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderBy('created_at', 'DESC');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function animation()
    {
        return $this->hasOne('App\Animation');
    }
    public function comment ()
    {
        return $this->hasMany('App\Comment');
    }
    public function favorites ()
    {
        return $this->hasMany('App\Favorite');
    }
}
