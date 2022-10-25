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
        
        <div class="threads">
            <div class="thread bg-white rounded-md mt-1 mb-1 p-3">
                @foreach ($threads as $thread)
                <div>
                    <a class="mb-2 text-xl font-bold" href="/threads/{{ $thread->id }}">{{ $thread->title }}</a>
                    <p class="mb-2">{{ $thread->body }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </body>
</html>

@endsection
