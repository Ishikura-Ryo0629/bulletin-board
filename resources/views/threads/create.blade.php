@extends('layouts.app')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>新規投稿</title>

        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        
    </head>
    @section('content')
    <body>
        <div class="thread-create">
            <form action="/threads/create" method="POST">
                @csrf
                <div class="thread-title">
                    <h1>スレッドタイトル</h1>
                    <input type="text" name="thread[title]" placeholder="タイトル" value="{{ old('thread.title') }}" />
                    <p class="title_error" style="color:red">{{ $errors->first('thread.title') }}</p>
                </div>
                <div class="thread-body">
                    <h2>スレッド本文</h2>
                    <textarea name="thread[body]" placeholder="本文" value="{{ old('thread.body') }}"></textarea>
                    <p class="body_error" style="color:red">{{ $errors->first('thread.body') }}</p>
                </div>
                <div class="form-group">
                    <label for="tags">
                        都道府県
                    </label>
                    <select id="tags" name="tags" class="form-select">
                        @foreach ($prefectures as $prefecture)
                            <option value="prefecture_tag">
                                {{ $prefecture->name }}
                            </option>
                        @endforeach
                    </select>
                    <label for="animation-tags">
                        アニメタイトル
                    </label>
                    <select>
                        @foreach ($animations as $animation)
                            <option value="animation_tag">
                                {{ $animation->name }}
                            </option>
                        @endforeach
                    </select>
                    {{--<label for="animation-tags">
                        タグ
                    </label>
                    <select>
                        @foreach ($tags as $tag)
                            <option value="animation_tag">
                                {{ $tag->name }}
                            </option>
                        @endforeach
                    </select>--}}
                        
                    @if ($errors->has('tags'))
                        <div class="invalid-feedback">
                            {{ $errors->first('tags') }}
                        </div>
                    @endif
                    </div>
                <input type="submit" value="投稿" />
            </form>
        </div>
    </body>
</html>
@endsection