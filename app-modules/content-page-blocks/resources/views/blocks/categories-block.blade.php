<h2>{{ $title }}</h2>

@foreach ($categories as $category)
    <span>{{ $category->name }}</span>
@endforeach
