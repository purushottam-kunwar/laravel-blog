@extends('layout.master')

@section('content')
    <div class="container">
        <h1> {{ $post->title }}</h1>
        <p> {{ $post->body }}</p>
    </div>
@endsection
