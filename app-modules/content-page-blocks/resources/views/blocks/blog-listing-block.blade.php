<h2>{{ $title }}</h2>

@foreach ($posts as $post)
    @include('filament-posts::post-thumbnail', [
        'featured_image_id' => $post->featured_image_id,
        'title' => $post->title,
        'excerpt' => $post->excerpt,
    ])
@endforeach
