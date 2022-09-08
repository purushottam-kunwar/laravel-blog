<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\PostsController@index');
Route::get('/post/new', 'App\Http\Controllers\PostsController@create');
Route::get('/post/{post}', 'App\Http\Controllers\PostsController@show');
Route::post('/posts', 'App\Http\Controllers\PostsController@store');


Route::post('/post/{post}/comment', 'App\Http\Controllers\CommentsController@store');

Route::get('/register', 'App\Http\Controllers\RegistrationController@create');
Route::post('/register', 'App\Http\Controllers\RegistrationController@store');


Route::get('/login', 'App\Http\Controllers\SessionController@create');
Route::post('/login', 'App\Http\Controllers\SessionController@store');
Route::get('/logout', 'App\Http\Controllers\SessionController@destroy');

Route::get('/post/tag/{id}', 'App\Http\Controllers\TagsController@index');
