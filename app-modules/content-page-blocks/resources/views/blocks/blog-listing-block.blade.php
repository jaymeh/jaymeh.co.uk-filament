<h2>{{ $title }}</h2>

@foreach ($posts as $post)
    <div class="blog-listing-block">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->excerpt }}</p>
        {{-- @dd($post->getFirstMedia()) --}}
        {{-- {!! Str::of($post->content)->markdown() !!} --}}
    </div>
@endforeach
