@extends('layout.master')
@section('content')
    <h1>Publish Post</h1>
    <hr>
    <form method="POST" action="/posts">
        {{  csrf_field() }}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" name="body"></textarea>
        </div>

        <button type="submit" class="btn btn-default">Publish</button>
    </form>
@endsection
