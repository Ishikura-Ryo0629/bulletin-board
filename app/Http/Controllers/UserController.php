<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;
use App\User;

class UserController extends Controller
{
    
    public function index(User $user, Thread $thread)
    {
        return view('User.index')->with(['own_threads' => $user->getOwnPaginateByLimit()]);
    }
}
