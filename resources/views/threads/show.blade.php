@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>トップページ</title>

        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        
    </head>
    <body>
        <h1 class="title">
            {{ $thread->title }}
        </h1>
        <div class="content">
            <div class="content__thread">
                <h3>本文</h3>
                <p>{{ $thread->body }}</p>    
            </div>
        </div>
        
        <div class="comments">
            <div class="thread bg-white rounded-md mt-1 mb-1 p-3">
                @foreach ($comments as $comment)
                <div>
                    <p class="mb-2">{{ $comment->body }}</p>
                </div>
                @endforeach
            </div>
        </div>
        <div class="comment-send">
            <form action="/threads/{{ $thread->id }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="body">
                        本文
                    </label>
 
                    <textarea name="comment[body]" class="form-control {{ $errors->has('comment.body') ? 'is-invalid' : '' }}" rows="4">
                        {{ old('comment.body') }}
                    </textarea>
                    @if ($errors->has('comment.body'))
                        <div class="invalid-feedback">
                            {{ $errors->first('comment.body') }}
                        </div>
                    @endif
                </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">
                        コメントする
                    </button>
                </div>
            </form>
        </div>
    </body>
</html>

@endsection