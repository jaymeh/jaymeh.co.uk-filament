
<div class="basis-4/12 w-full">
    <div class="bg-white p-8 shadow-xl rounded-xl">
        <h2 class="text-xl mb-4 text-fuchsia-pink">{{ $title }}</h2>
        @foreach ($categories as $category)
            <span class="inline-block py-2">
                <a class="button " href="/categories/craft-cms">{{ $category->name }}<span class="font-bold text-white">(amount)</span></a>
            </span>
        @endforeach
    </div>
</div>
