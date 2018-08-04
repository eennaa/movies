<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Genre;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = \App\Movie::all();
        $lastN = \App\Movie::orderBy('id', 'desc')->take(5)->get();

        return view('movies.index', compact('movies', 'lastN'));
    }

    public function show($id)
    {
        $movie = \App\Movie::with('comments')->findOrFail($id);
        $lastN = \App\Movie::orderBy('id', 'desc')->take(5)->get();

        return view('movies.show', compact('movie', 'lastN'));
    }

    public function add()
    {
        return view('movies.create');
    }

    public function create(Request $request)
    {
        $this->validate(request(), [
                                    'title' => 'required',
                                    'genre' => 'required',
                                    'year' => 'required|numeric|min:1900|max:'.(date('Y')+1),
                                    'director' => 'required',
                                    'storyline' => 'required|max:1000',
                                    ]);

        $movie = \App\Movie::create([ 
                            'title' => request('title'),
                            'genre' => request('genre'),
                            'year' => request('year'),
                            'director' => request('director'),
                            'storyline' => request('storyline'),
                            ]);

        $string = request('genre');
        $genreArray = explode(',' , $string);
        $genreIdArray = array();

        foreach($genreArray as $g)
        {            
            $g = trim($g, ' ');
            if(!(( \App\Genre::where('name', '=', $g))->exists()))
            {
                 \App\Genre::create([ 'name'=> $g  ]);
            } 
            
            $genre_id = Genre::where('name',$g)->first()->id;
            $movie_id = $movie->id;

            $genreIdArray[] = $genre_id;       
        }
        
        $movie -> genres()-> attach($genreIdArray);
        

        return redirect('/movies');
    }
}
