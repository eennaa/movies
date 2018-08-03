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

@endsection