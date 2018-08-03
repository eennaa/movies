<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = \App\Movie::all();

        return view('movies.index', compact('movies'));
    }

    public function show($id)
    {
        $movie = \App\Movie::findOrFail($id);

        return view('movies.show', compact('movie'));
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

        \App\Movie::create([ 
                            'title' => request('title'),
                            'genre' => request('genre'),
                            'year' => request('year'),
                            'director' => request('director'),
                            'storyline' => request('storyline'),
                            ]);

        return redirect('/movies');
    }
}
