@extends('layout.master')

@section('content')
    <div>
        <h1> {{ $post->title }}</h1>
        <p> {{ $post->body }}</p>

        <hr>
        <div class="comment">
            <ul class="list-group">
                @foreach($post->comments as $comment)
                    <li class="list-group-item">
                        <strong> {{  $comment->created_at->diffForHumans()}}:</strong>
                        {{  $comment->body }}
                    </li>

                @endforeach
            </ul>

        </div>
    </div>
@endsection
