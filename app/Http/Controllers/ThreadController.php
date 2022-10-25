<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Thread;
use App\Prefecture;
use App\Animation;
use App\Tag;
use App\Comment;
use App\Favorite;
use App\Http\Requests\ThreadRequest;

class ThreadController extends Controller
{
    
    public function index (Thread $thread) 
    {
        return view('threads/index')->with(['threads' => $thread->get()]);
    }
    public function show (Thread $thread, Comment $comment, Favorite $favorite)
    {
        $favorite->where('thread_id', $thread->id)->where('user_id', auth()->user()->id)->first();
        return view('threads/show')->with([
            'thread' => $thread,
            'comments' => $comment->getComments(),
            'favorite' => $favorite,
            ]);
    }
    public function store (Thread $thread, ThreadRequest $request)
    {
        $input = $request['thread'];
        $input += ['user_id' => \Auth::id()];
        $thread->fill($input)->save();
        return redirect('threads/' . $thread->id);
    }
    public function create (Prefecture $prefecture, Animation $animation, Tag $tag) 
    {
        return view('threads/create')->with([
            'prefectures' => $prefecture->get(),
            'animations' => $animation->get(),
            'tags' => $tag->get()
        ]);
    }
    public function edit ()
    {
        // 
    }
    public function update ()
    {
        // 
    }
    public function delete ()
    {
        // 
    }
    
}
