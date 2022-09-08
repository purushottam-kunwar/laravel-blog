<div class="blog-post">
    <h2 class="blog-post-title">
        <a href="/post/{{ $post->id }}">
            {{ $post->title }}
        </a>
    </h2>
    <p class="blog-post-meta">
        {{ $post->created_at->toFormattedDateString() }}
        by <a href="#">{{ $post->user->name }} </a>
    </p>
    <p>
        {{ $post-> body }}
    </p>
    <br><br>
</div>
