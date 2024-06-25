<!doctype html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="title" content=" - Jamie Sykes" />
        <meta name="description" content="I’m a Backend Web Developer working in Leeds. I have been working in Website Development Agencies for over a decade." />
        <title></title>
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128213605-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-128213605-1');
        </script>
        @vite(['resources/js/app.js', 'resources/css/app.css'])
        <link rel="stylesheet" rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" onload="this.onload=null;this.rel='stylesheet'">
    </head>
    <body class="font-sans leading-normal text-cinder">
        @include('partials.header')


        @yield('content')

        <div class="basis-4/12 w-full">
            @yield('sidebar')
        </div>
        {{-- <script src="{{ mix src='/js/site.js' }}"></script> --}}

        @include('partials.footer')
    </body>
</html>
