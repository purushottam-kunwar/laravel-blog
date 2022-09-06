<?php
use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\PostsController@index');
//Route::get('/posts/{post}', 'App\Http\Controllers\PostsController@show');
Route::get('/posts/create', 'App\Http\Controllers\PostsController@create');
Route::post('/posts', 'App\Http\Controllers\PostsController@store');
