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


        {{--       add comments--}}
        <hr>
        <div class="card">
            <div class="card-block">
                <form method="POST" action="/post/{{ $post->id }}/comment">
                    {{  csrf_field() }}
                    <div class="form-group">
                        <textarea name="body" placeholder="Your comment here..." class="form-control"> </textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Add Comment</button>
                    </div>
                </form>

                @include('layout.errors')
            </div>
        </div>
    </div>
@endsection
