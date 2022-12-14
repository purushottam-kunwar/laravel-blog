<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {

        $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        // validate data
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',
        ]);

        // save to database
        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );

        session()->flash('message', 'your post has been published...');

        return redirect('/');
    }
}
