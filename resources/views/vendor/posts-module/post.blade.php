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
    'link_url' => route('posts.show', $post),
    'link_text' => 'Read More',
])

@section('sidebar')
    <div class="bg-white p-8 shadow-xl rounded-xl">
        <div class="flex gap-2">
            <div>
                {{-- {{ author.avatar }}
                    <a href="/" class="cursor-pointer"><img class="rounded-full" src="{{ glide src="{{ url }}" width="100" }}" alt="{{ alt }}" /></a>
                {{ /author.avatar }} --}}
            </div>
            <div class="self-center">
                <p><span class="font-bold">Posted By:</span> {{ 'author.name' }}</p>
                <p><span class="font-bold">On:</span> {{ 'date' }}</p>
            </div>
        </div>
        <hr class="my-4" />
        <div class="mt-4 flex items-center">
            <p><span class="mr-2 font-bold">Tags:</span></p>
            <div class="flex grid-cols-2 gap-2 flex-wrap justify-end">
            Categories...
            </div>
        </div>
    </div>
@endsection
