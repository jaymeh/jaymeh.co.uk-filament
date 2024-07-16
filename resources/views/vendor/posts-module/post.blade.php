@extends('layouts.app')

@section('content')
    <div class="bg-white p-8 shadow-xl rounded-xl w-full lg:w-8/12">
        <div class="page-content">
            {!! Str::markdown($post->content) !!}
        </div>
    </div>
@endsection

@include('page-blocks::blocks.header-banner-block', [
    'title' => $post->title,
    'image_url' => $post->featuredImage->url,
    'subtitle' => $post->excerpt,
])

@section('sidebar')
    <div class="bg-white p-8 shadow-xl rounded-xl">
        <div class="flex gap-2">
            <div><img class="rounded-full" src="https://ui-avatars.com/api/?name={{$post->author?->name}}&length=1&rounded=true&size=100" /></div>
            <div class="self-center">
                <p><span class="font-bold">Posted By:</span> {{ $post->author?->name }}</p>
                <p><span class="font-bold">On:</span> {{ $post->published_at->format('d/m/Y') }}</p>
            </div>
        </div>
        <hr class="my-4" />
        <div class="mt-4 flex items-center">
            <p><span class="mr-2 font-bold">Tags:</span></p>
            <div class="flex grid-cols-2 gap-2 flex-wrap justify-end">
                @foreach ($post->tags as $tag)
                    <a class="button" href="">{{ $tag->name }}</a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
