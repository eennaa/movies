<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenresController extends Controller
{
    public function show($genre)
    {
        $genreModel = \App\Genre::where('name', $genre)->first();
        $movies = $genreModel->movies;
        return view('movies.index', compact('movies'));
    }
}
