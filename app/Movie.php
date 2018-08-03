<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title', 'genre', 'year', 'director', 'storyline'
    ];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
