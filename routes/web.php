<?php
use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\PostsController@index');
Route::get('/posts/{post}', 'App\Http\Controllers\PostsController@show');
