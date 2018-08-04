<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movies', 'MoviesController@index');
Route::get('/movies/{id}', 'MoviesController@show')->name('single-movie');

Route::get('/add', 'MoviesController@add');
Route::post('/create', 'MoviesController@create');
Route::post('/comment/add', 'CommentsController@store');

Route::get('/genres/{genre}', 'GenresController@show');
// Route::get('', '@');