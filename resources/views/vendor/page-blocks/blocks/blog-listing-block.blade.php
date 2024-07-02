<div class="article-container">
    <h1 class="text-2xl text-fuchsia-pink font-bold mb-4">{{ $title }}</h1>

    @foreach ($posts as $post)
        @include('posts-filament::partials.post-thumbnail', [
            'featured_image_id' => $post->featured_image_id,
            'title' => $post->title,
            'excerpt' => $post->excerpt,
            'date' => $post->published_at->format('d/m/Y'),
        ])
    @endforeach
</div>
