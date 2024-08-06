<h2>{{ $title }}</h2>

@foreach ($posts as $post)
<article class="mb-2">
    <div class="content">
        <a href="{{ route('posts.show', $post->slug) }}">
            <h3 class="text-lg font-semibold inline text-governor-bay hover:text-picton-blue">{{ $post->title }}</h3>
        </a>
        <p class="inline"> - {{ $post->created_at->format('d/m/Y') }}</p>
    </div>
</article>
@endforeach