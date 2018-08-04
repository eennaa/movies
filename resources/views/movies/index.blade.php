@extends('layouts.master')

@section('title')
    Movies
@endsection


@section('content')
    @foreach($movies as $movie)
        <div>
            <a href="{{ "/movies/" . $movie->id}}" >{{ $movie->title }}</a>
            <p>{{ str_limit($movie->storyline, $limit = 25, $end = '...') }}</p>
        </div>
    @endforeach

    
@endsection

 