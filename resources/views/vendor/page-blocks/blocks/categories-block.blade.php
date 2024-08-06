@section('sidebar')
@parent

<div class="bg-white p-8 shadow-xl rounded-xl mb-4">
    <h2 class="text-xl mb-4 text-fuchsia-pink">{{ $title }}</h2>
    @foreach ($categories as $category)
    <span class="inline-block py-2">
        <a class="button " href="/categories/{{ $category->slug }}">{{ $category->name }} <span
                class="font-bold text-white">({{ $category->posts_count ?? 0}})</span></a>
    </span>
    @endforeach
</div>
@endsection