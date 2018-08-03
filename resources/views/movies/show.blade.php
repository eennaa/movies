@extends('layouts.master')

@section('title')
    {{ $movie->title }}
@endsection


@section('content')
    <h1> <div class="title"> {{ $movie->title }} </div></h1>
    <p> {{ $movie->genre }} </p>
    <p> {{ $movie->year }} </p>
    <p> {{ $movie->director }} </p>
    <p> {{ $movie->storyline }} </p> 
    <br><br><br>

    <div class="comment">
        Comments:
        @foreach($movie->comments as $comment)
            <ul>
                <p> {{ $comment->content }}
                    <small id="timestamp" class="form-text text-muted">{{ $comment->created_at }}</small>
                </p> 
            </ul>
        @endforeach
    </div>
@endsection