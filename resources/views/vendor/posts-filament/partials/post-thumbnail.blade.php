<article class="grid grid-col items-center grid-cols-5 gap-4 mb-4">
    <div class="thumbnail col-span-12 lg:basis-72 sm:col-span-2 md:col-span-1">
        <a href="#">
            <x-curator-glider :media="$featured_image_id" width="600" height="600" fit="crop" />
        </a>
    </div>
    <div class="content col-span-12 sm:col-span-3 md:col-span-4">
        <a href="#"><h2 class="text-gray-900 text-xl font-semibold hover:text-governor-bay">{{ $title }}</h2></a>
        <p class="text-xs">{{ $date }}</p>
        <p class="mt-2">{{ $excerpt }}</p>
        <p class="text-sm mt-2" ><a href="#">Continue Reading...</a></p>
    </div>
</article>
