<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\CommentController;

class Comment extends Model
{
    protected $fillable = [
        'user_id',
        'body',
        'thread_id',
    ];
    public function getComments ()
    {
        return $this->orderBy('created_at', 'ASC')->get();
    }
    public function user ()
    {
        return $this->belongsTo('App\User');
    }
    public function thread ()
    {
        return $this->belongsTo('App\Thread');
    }
}
