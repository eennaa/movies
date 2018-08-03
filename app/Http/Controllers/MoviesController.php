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
}
