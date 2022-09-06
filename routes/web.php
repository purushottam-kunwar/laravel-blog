<?php
use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\PostsController@index');
Route::get('/post/new', 'App\Http\Controllers\PostsController@create');
Route::get('/post/{post}', 'App\Http\Controllers\PostsController@show');
Route::post('/posts', 'App\Http\Controllers\PostsController@store');
