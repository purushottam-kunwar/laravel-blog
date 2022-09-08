@extends('layout.master')

@section('content')
    <div class="row">
        <div class="col">
            <h1>
                Login
            </h1>
            <form method="POST" action="/login">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Log In</button>
                </div>


                @include('layout.errors')
            </form>

        </div>
    </div>

@endsection
