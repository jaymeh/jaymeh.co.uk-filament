@extends('layouts.app')

@section('content')
    <div class="blog-posts-container">
        <h1 class="mb-4">Blog Posts</h1>
        @foreach ($posts as $post)
            @include(
                'posts-filament::partials.post-thumbnail',
                [
                    'title' => $post->title,
                    'date' => $post->published_at->format('d/m/Y'),
                    'featured_image_id' => $post->featured_image_id,
                    'excerpt' => $post->excerpt,
                    'url' => route('posts.show', $post)
                ]
            )
        @endforeach
    </div>
@endsection

@section('banner')
    @include('page-blocks::blocks.header-banner-block', [
        'title' => 'Jamie Sykes',
        'subtitle' => 'Backend Web Developer with over a decade of Agency Experience.',
        'image_url' => 'https://via.placeholder.com/1920x1080',
    ])
@endsection
