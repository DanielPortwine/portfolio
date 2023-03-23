<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CTSLPTEE6Y"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-CTSLPTEE6Y');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description')I build bespoke web apps (SaaS, Intranets, APIs) using Laravel, to expand the online service offering of businesses.">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@danielportwine">
    <meta name="twitter:title" content="@stack('title') Daniel Portwine - Web App Developer">
    <meta name="twitter:description" content="I build bespoke web apps (SaaS, Intranets, APIs) using Laravel, to expand the online service offering of businesses.">
    <meta name="twitter:image:src" content="{{ asset('media/og-image.png') }}">
    <meta property="og:site_name" content="Daniel Portwine">
    <meta property="og:title" content="@stack('title') Daniel Portwine - Web App Developer">
    <meta property="og:description" content="@yield('description')I build bespoke web apps (SaaS, Intranets, APIs) using Laravel, to expand the online service offering of businesses.">
    <meta property="og:url" content="https://danportwine.co.uk">
    <meta property="og:image" content="{{ asset('media/og-image.png') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">
    @stack('seo')
    <title>@stack('title')Daniel Portwine - Web App Developer</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('recaptcha')

</head>
<body class="bg-gray-700">
<!-- Header -->
<section class="w-full text-gray-700 bg-gray-800">
    <div class="px-8 mx-auto max-w-7xl lg:px-16">
        <div class="flex flex-col flex-wrap items-center justify-between py-10 mx-auto md:flex-row max-w-7xl">
            <a href="{{ route('home') }}" class="flex items-center justify-center w-12 h-12 mb-5 transform bg-gray-900 rounded-full lg:mb-0" aria-label="Home">
                <img src="{{ asset('media/profile-logo-1x.webp') }}" srcset="{{ asset('media/profile-logo-1x.webp') }} 1x, {{ asset('media/profile-logo-2x.webp') }} 2x" class="rounded-full" alt="logo" width="48" height="48">
            </a>
            <div class="relative flex flex-col md:flex-row">
                <nav class="flex flex-wrap justify-center items-center pt-3 pb-5 mb-4 space-x-5 text-base border-b border-gray-200 md:space-x-12 md:pt-0 md:mb-0 md:border-b-0 md:pr-3 md:mr-3 md:pb-0">
                    <a href="{{ route('home') }}" class="font-medium leading-6 text-gray-200 hover:text-white">Home</a>
                    <a href="{{ route('about') }}" class="font-medium leading-6 text-gray-200 hover:text-white">About</a>
                    <a href="{{ route('projects') }}" class="font-medium leading-6 text-gray-200 hover:text-white">Projects</a>
                    <a href="{{ route('blog') }}" class="font-medium leading-6 text-gray-200 hover:text-white">Blog</a>
                    <a href="{{ route('contact') }}" class="font-medium leading-6 md:mr-6 text-black bg-green-500 hover:bg-green-600 rounded-xl py-2 px-4 mt-2 sm:mt-0">Contact</a>
                </nav>
            </div>
        </div>
    </div>
</section>

<main>
    @yield('content')
</main>

<!-- Footer -->
<section class="box-border pt-5 leading-7 text-gray-900 bg-gray-800 border-0 border-gray-200 border-solid pb-7">
    <div class="box-border px-4 mx-auto border-solid md:px-6 lg:px-8 max-w-7xl">
        <div class="relative flex flex-col items-center justify-between leading-7 text-gray-200 border-0 border-gray-200 md:flex-row md:items-center">
            <a href="{{ route('home') }}" class="flex items-center justify-center w-12 h-12 mb-5 transform bg-gray-900 rounded-full lg:mb-0" aria-label="Home">
                <img src="{{ asset('media/profile-logo-1x.webp') }}" srcset="{{ asset('media/profile-logo-1x.webp') }} 1x, {{ asset('media/profile-logo-2x.webp') }} 2x" class="rounded-full" alt="logo" width="48" height="48">
            </a>
            <div class="relative flex flex-col md:flex-row mx-auto order-last md:order-2">
                <nav class="flex flex-nowrap items-center pt-3 pb-5 space-x-5 text-base md:space-x-12 md:pt-0 md:mb-0 md:border-b-0 md:pr-3 md:mr-3 md:pb-0">
                    <a href="{{ route('home') }}" class="font-medium leading-6 text-gray-200 hover:text-white">Home</a>
                    <a href="{{ route('about') }}" class="font-medium leading-6 text-gray-200 hover:text-white">About</a>
                    <a href="{{ route('projects') }}" class="font-medium leading-6 text-gray-200 hover:text-white">Projects</a>
                    <a href="{{ route('blog') }}" class="font-medium leading-6 text-gray-200 hover:text-white">Blog</a>
                    <a href="{{ route('contact') }}" class="font-medium leading-6 text-gray-200 md:mr-6 hover:text-white">Contact</a>
                </nav>
            </div>
            <div class="box-border right-0 flex justify-center w-full mt-4 space-x-3 border-solid md:w-auto md:justify-end md:absolute md:mt-0">
                <a href="https://www.facebook.com/portwine.dan/" class="inline-flex items-center leading-7 text-gray-200 no-underline border-0 border-gray-200 cursor-pointer hover:text-white" target="_blank" aria-label="View my Facebook Page">
                    <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M0 0h24v24H0z" stroke="none"></path><path d="M7 10v4h3v7h4v-7h3l1-4h-4V8a1 1 0 011-1h3V3h-3a5 5 0 00-5 5v2H7"></path></svg>
                </a>
                <a href="https://github.com/DanielPortwine" class="inline-flex items-center leading-7 text-gray-200 no-underline border-0 border-gray-200 cursor-pointer hover:text-white" target="_blank" aria-label="View my GitHub Page">
                    <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M0 0h24v24H0z" stroke="none"></path><path d="M9 19c-4.3 1.4-4.3-2.5-6-3m12 5v-3.5c0-1 .1-1.4-.5-2 2.8-.3 5.5-1.4 5.5-6a4.6 4.6 0 00-1.3-3.2 4.2 4.2 0 00-.1-3.2s-1.1-.3-3.5 1.3a12.3 12.3 0 00-6.2 0C6.5 2.8 5.4 3.1 5.4 3.1a4.2 4.2 0 00-.1 3.2A4.6 4.6 0 004 9.5c0 4.6 2.7 5.7 5.5 6-.6.6-.6 1.2-.5 2V21"></path></svg>
                </a>
            </div>
        </div>
        <div class="pt-4 mt-4 leading-7 text-center text-gray-400 border-t border-gray-200 md:mt-5 md:pt-5 md:mt-6 md:pt-6">
            <p class="box-border mt-0 text-sm border-0 border-solid">
                © {{ date('Y') }} Daniel Portwine. All Rights Reserved.
            </p>
        </div>
    </div>
</section>

{{--<script src="/node_modules/tw-elements/dist/js/index.min.js"></script>--}}
</body>
</html>
