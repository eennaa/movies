@extends('layouts.master')

@section('title')
    Add movie
@endsection


@section('content')
    <form method="POST" action="/create">
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
            <label for="title">Movie title</label>
            <input name="title" type="title" class="form-control" id="title">
            
        </div>
        <div class="form-group ">
            <label for="genre">Genre</label>
            <input name="genre" type="string" class="form-control" id="genre">
            
        </div>
        <div class="form-group ">
            <label for="year">Year</label>
            <input name="year" type="integer" class="form-control" id="year">
            
        </div>
        <div class="form-group ">
            <label for="director">Director</label>
            <input name="director" type="string" class="form-control" id="director">
 
        </div>
        <div class="form-group ">
            <label for="storyline">Storyline</label>
            <input  name="storyline" type="text" class="form-control " id="storyline">
            <small id="storylineHelp" class="form-text text-muted">No spoilers, please!</small>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
