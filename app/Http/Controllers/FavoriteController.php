<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Favorite;
use App\Thread;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function store(Thread $thread)
    {
        Favorite::create([
            'user_id' => \Auth::id(),
            'thread_id' => $thread->id,
            ]);
        return redirect('/threads/' . $thread->id);
    }
    public function destroy (Thread $thread, Request $request)
    {
        $favorite = Favorite::where('thread_id', $thread->id)->where('user_id', \Auth::id())->first();
        $favorite->delete();
        return redirect('/threads/' . $thread->id);
    }
    
}
