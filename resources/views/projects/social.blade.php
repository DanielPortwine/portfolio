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
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/EjgSXJ2oQ_0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
            <h3 class="text-2xl font-bold leading-7 text-white">Single Page Application with Vue<br></h3>
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
                <img src="{{ asset('media/projects/social/2FADemo.png') }}">
                <h4 class="text-xl font-medium text-white text-center">2FA<br></h4>
                <p class="text-base text-center text-gray-100">Setup 2-factor authentication with an authenticator app for your account.</p>
            </div>

            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/social/ScrollDemo.png') }}">
                <h4 class="text-xl font-medium text-white">Infinite Scroll<br></h4>
                <p class="text-base text-center text-gray-100">Content is loaded as you scroll instead of having pagination.</p>
            </div>

            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/social/FollowDemo.png') }}">
                <h4 class="text-xl font-medium text-white">Follow & Unfollow<br></h4>
                <p class="text-base text-center text-gray-100">Follow other users and see their posts in your feed.</p>
            </div>
        </div>
    </div>
</section>
@endsection
