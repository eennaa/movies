<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        $this-> validate(request(), [
                                        'content' => 'required',                                                                        
                                    ]);

        \App\Comment::create([ 
                                'content' => request('content'),
                                'movie_id' => request('movie_id'),
                                ]);
        return redirect()->back();

    }
}
