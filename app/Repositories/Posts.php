<?php

namespace App\Repositories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

class Posts
{
    public function all(): Collection
    {
        return Post::all();
    }
}
