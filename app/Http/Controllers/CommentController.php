<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\ThreadRequest;
use App\Comment;
use App\Thread;

class CommentController extends Controller
{
    public function store(Thread $thread, Comment $comment, CommentRequest $commentRequest)
    {
        $input = $commentRequest['comment'];
        $input += [
            'user_id' => \Auth::id(),
            'thread_id' => $thread->id,
            ];
        $comment->fill($input)->save();
        return redirect('/threads/' . $thread->id);
    }
}
