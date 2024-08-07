@section('banner')
<div class="top-0 w-full">
    <div class="w-full mb-4 box-border bg-cover bg-center" @if(!empty($image_url))
        style="background-image: url('{{ $image_url }}')" @endif>
        <div class="max-w-screen-xl mx-auto flex">
            <div class="bg-white text-left p-4 mt-40 rounded-xl mx-4 md:mx-auto lg:mx-4 xl:mx-0 mb-16 md:mb-12">
                <h2 class="font-bold text-xl md:text-3xl">{{ $title }}</h2>
                <p class="font-bold">{{ $subtitle }}</p>
                @if (!empty($link_url) && !empty($link_text))
                <a class="mt-4 text-white button p-2 inline-block rounded hover:font-normal" href="{{ $link_url }}">{{
                    $link_text }}</a>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection