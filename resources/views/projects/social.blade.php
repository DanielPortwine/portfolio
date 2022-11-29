@extends('layouts.app')

@push('title')Social Platform Project | @endpush

@section('description')A Laravel and Vue Single Page Application for sharing posts, inspired by Twitter. | @endsection

@section('content')
<section class="px-2 pt-32 bg-gray-700 md:px-0">
    <div class="container items-center max-w-6xl px-5 mx-auto space-y-6 text-center">
        <h1 class="text-4xl font-extrabold tracking-tight text-left text-white sm:text-5xl md:text-6xl md:text-center">
            <span class="block">Social</span>
        </h1>
        <p class="w-full mx-auto text-base text-left text-gray-300 md:max-w-md sm:text-lg lg:text-2xl md:max-w-3xl md:text-center">
            A Twitter-inspired social platform Single Page Application built with Laravel & Vue.
        </p>
        <a href="https://github.com/DanielPortwine/Social" class="w-full mx-auto text-white hover:text-gray-200">View on GitHub</a>
    </div>
    <div class="container items-center max-w-7xl px-5 mx-auto mt-16 text-center">
        <div class="content-wrapper">
            <div id="youtube-placeholder" class="youtube cursor-pointer" data-id="EjgSXJ2oQ_0">
                <div class="flex flex-center w-100 h-full items-center">
                    <svg class="z-10 text-red-500 mx-auto" xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mt-8 max-w-6xl mx-auto">
    <div class="flex flex-wrap justify-center gap-2 text-white">
        <a href="https://laravel.com/" class="px-2 py-1 rounded-lg bg-laravel">Laravel</a>
        <a href="https://www.php.net/" class="px-2 py-1 rounded-lg bg-php">PHP</a>
        <a href="https://jetstream.laravel.com/2.x/introduction.html" class="px-2 py-1 rounded-lg bg-jetstream">Jetstream</a>
        <a href="https://vuejs.org/" class="px-2 py-1 rounded-lg bg-vue">Vue</a>
        <a href="https://www.javascript.com/" class="px-2 py-1 rounded-lg bg-js">JavaScript</a>
        <a href="https://laravel.com/docs/9.x/sanctum" class="px-2 py-1 rounded-lg bg-laravel">Sanctum</a>
        <a href="https://tailwindcss.com/" class="px-2 py-1 rounded-lg bg-tailwind">Tailwind CSS</a>
        <a href="https://jetstream.laravel.com/2.x/stacks/inertia.html" class="px-2 py-1 rounded-lg bg-jetstream">Inertia</a>
        <a href="https://laravel.com/docs/9.x/fortify" class="px-2 py-1 rounded-lg bg-laravel">Fortify</a>
        <a href="https://www.mysql.com/" class="px-2 py-1 rounded-lg bg-mysql">MySQL</a>
        <a href="https://www.docker.com/" class="px-2 py-1 rounded-lg bg-docker">Docker</a>
    </div>
</section>
<section class="w-full px-8 py-16 bg-gray-700 xl:px-0 tails-relative">
    <div class="flex flex-col max-w-6xl mx-auto md:flex-row">
        <div class="w-full pr-5 md:w-1/5 xl:pr-12">
            <h2 class="text-2xl font-bold leading-7 text-white">Single Page Application with Vue<br></h2>
        </div>

        <div class="w-full mt-5 md:mt-0 md:w-4/5 md:pl-2">
            <p class="text-base font-normal leading-none text-gray-300 md:text-lg">
                Social was a project I started to learn Vue.js and the Single Page Application methodology.
                The basic concept is that users can register, login and then create posts. They can then comment on their own or other users' posts.
                The lists of posts use infinite scroll for a better user experience.
                Users can click on a user's name to see more information about that user as well as a list of that users' posts.
                There is also a side tab that lists the most followed users.<br>
            </p>
        </div>
    </div>
</section>
<section class="bg-gray-700 pb-20">
    <div class="container max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold tracking-tight text-center text-white">Features</h2>
        <p class="mt-2 text-lg text-center text-gray-300">Check out some of the features of Social below.</p>
        <div class="grid grid-cols-4 gap-8 mt-10 sm:grid-cols-8 lg:grid-cols-12 sm:px-8 xl:px-0">

            <div class="relative flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 overflow-hidden transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/social/2FADemo.png') }}" alt="2 Factor Authentication">
                <h3 class="text-xl font-medium text-white text-center">2FA<br></h3>
                <p class="text-base text-center text-gray-100">Setup 2-factor authentication with an authenticator app for your account.</p>
            </div>

            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/social/ScrollDemo.png') }}" alt="Infinite Scroll">
                <h3 class="text-xl font-medium text-white">Infinite Scroll<br></h3>
                <p class="text-base text-center text-gray-100">Content is loaded as you scroll instead of having pagination.</p>
            </div>

            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/social/FollowDemo.png') }}" alt="Follow and Unfollow">
                <h3 class="text-xl font-medium text-white">Follow & Unfollow<br></h3>
                <p class="text-base text-center text-gray-100">Follow other users and see their posts in your feed.</p>
            </div>
        </div>
    </div>
</section>
@endsection
