<div class="relative" style="background-image: linear-gradient(to bottom, rgba(255,255,255,1), rgba(255,255,255,0));">
    <div class="py-4 z-50 text-white w-full hidden md:flex md:fixed" style="background-image: linear-gradient(to bottom, rgba(0,0,0,1), rgba(255,255,255,0))">
        <div class="basis-2/12"></div>
        <div class="grow menu">
            <div class="flex justify-center items-center box-border font-bold">
                <ul class="box-border text-right" style="width: 200px">
                    <li class="inline-block px-4"><a class="{{ url()->current() == url('/') ? 'font-bold' : '' }} text-white" href="/">Home</a></li>
                    <li class="inline-block px-4"><a class="{{ url()->current() == url('/blog') ? 'font-bold' : '' }} text-white" href="/blog">Blog</a></li>
                </ul>

                <div class="max-w-xs rounded inline-block px-4">
                    <a href="/">
                        <img src="{{ Vite::asset('resources/images/profile-photo.webp') }}" alt="Profile photo of me." class="rounded-full border-fuchsia-pink border-4" />
                    </a>
                </div>

                <ul class="align-middle box-border" style="width: 200px">
                    <li class="inline-block px-4"><a class="{{ url()->current() == url('/about-me') ? 'font-bold' : '' }} text-white" href="/about-me">About</a></li>
                    <li class="inline-block px-4"><a class="{{ url()->current() == url('/contact') ? 'font-bold' : '' }} text-white" href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="basis-2/12"></div>
    </div>

    <nav class="md:hidden w-full fixed z-10" style="background-image: linear-gradient(to bottom, rgba(0,0,0,1), rgba(255,255,255,0))">
        <div class="align-middle justify-between p-4 mx-auto flex items-center">
            <div>
                <a href="/">
                    {{-- {{ asset url="/assets/profile-photo.jpeg" }}
                        <img src="{{ glide :src="url" :alt="alt" fm="webp" h="60" }}" alt="{{ alt }}" class="rounded-full border-fuchsia-pink border-4" style="max-height:60px" />
                    {{ /asset }} --}}
                </a>
            </div>
            <input id="toggle" type="checkbox" class="-left-16 fixed hidden peer" />
            <div class="fixed w-full h-full space-x-8 peer-checked:left-0 duration-300 transition-left md:duration-600 lg:flex top-0 left-full bg-black/90">
                <ul class="pt-4 ">
                    <li><a class="mobile-link" href="/">Home</a></li>
                    <li><a class="mobile-link" href="/blog">Blog</a></li>
                    <li><a class="mobile-link" href="/about-me">About</a></li>
                    <li><a class="mobile-link" href="/contact">Contact</a></li>
                </ul>
            </div>
            <label for="toggle" class="z-20 cursor-pointer">
                <div id="mobile-menu-toggle" class="flex lg:hidden">
                    <div class="space-y-2">
                        <span class="block w-8 h-0.5 bg-white animate-pulse"></span>
                        <span class="block w-8 h-0.5 bg-white animate-pulse"></span>
                        <span class="block w-8 h-0.5 bg-white animate-pulse"></span>
                    </div>
                </div>
            </label>
        </div>
    </nav>

    @include('partials.header-banner')
</div>
