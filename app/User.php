<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Auth;

class User extends Authenticatable
{
    use Notifiable;
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','age','sex','image_path',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function threads(){
        return $this->hasMany('App\User');
    }
    public function animations(){
        return $this->belongsToMany('App\Animation');
    }
    public function comments(){
        return $this->hasMany('App\Comment');
    }
    public function thread () {
        return $this->hasMany('App\Thread');
    }
    // public function getOwnPaginateByLimit(int $limit_count = 20){
    //     // return $this::with('threads')->find(Auth::id())->threads()->orderBy('updated_at', DESC)->paginate($limit_count);
    // }
    public function favorites ()
    {
        return $this->hasMany('App\Favorite');
    }
    
}
