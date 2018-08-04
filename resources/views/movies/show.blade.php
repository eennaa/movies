@extends('layouts.master')

@section('title')
    {{ $movie->title }}
@endsection


@section('content')
    <h1> <div class="title"> {{ $movie->title }} </div></h1>
    <!-- @if(count($movie->genres)) -->
       <ul class='list-unstyled'>
           @foreach($movie->genres as $genre)
               <li class='btn btn-primary'>
                   <a style='color: white;' 
                      href='/genres/{{ $genre->name }}'>{{ $genre->name }}
                   </a>
               </li>
           @endforeach
       </ul>
    <!-- @endif            ne znam ni cemu sluzi, PITAJ NA VA-->
    <p> {{ $movie->year }} </p>
    <p> {{ $movie->director }} </p>
    <p> {{ $movie->storyline }} </p> 
    <br><br><br>

    <div class="comment">
        Comments:
        @foreach($movie->comments as $comment)
            <ul>
                <p style="background-color: #e3f2fd;"> {{ $comment->content }}
                    <small id="timestamp" class="form-text text-muted">{{ $comment->created_at }}</small>
                </p> 
            </ul>
        @endforeach
    </div>
    <form method="POST" action="/comment/add">
        {{ csrf_field() }}

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group ">
            <label for="content">Write your comment</label>
            <input name="content" type="text" class="form-control" id="content">
            <small id="commentHelp" class="form-text text-muted">Watch your language, please</small>
            <input name="movie_id" type="hidden" value="{{ $movie->id }}">
        </div>
        
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection