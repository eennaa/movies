@extends('layouts.master')

@section('title')
    Movies
@endsection


@section('content')
    @foreach($movies as $movie)
        <div>
            <a href="{{ "/movies/" . $movie->id}}" >{{ $movie->title }}</a>
            <p>{{ $movie->storyline }}</p>
        </div>
    @endforeach
@endsection