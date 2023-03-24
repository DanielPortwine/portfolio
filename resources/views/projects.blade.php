@extends('layouts.app')

@push('title')Projects | @endpush

@section('description')View my previous projects and open source contributions. | @endsection

@section('content')
<section class="h-auto bg-gray-700 py-12 md:py-20">
    <div class="md:text-center max-w-7xl mx-auto xl:px-0 px-5">
        <p class="font-medium mb-4 sm:text-lg uppercase tracking-wide text-green-400">Previous Projects<br></p>
        <h1 class="text-4xl font-extrabold tracking-normal text-white sm:text-5xl lg:text-7xl md:leading-none">Explore my previous projects<br></h1>
        <p class="max-w-none mx-auto mt-3 text-xl font-normal text-gray-300 sm:mt-5 sm:text-xl md:mt-5 lg:text-2xl md:max-w-4xl">See some of the work I've completed to give you inspiration for your own ideas. If you see anything you like, make sure you <a class="text-green-300 hover:text-green-200" href="{{ route('contact') }}">get in touch</a>.<br></p>
    </div>
</section>
<section class="h-auto bg-gray-700">
    <div class="px-0 py-10 mx-auto space-y-10 max-w-7xl md:px-10">
        <!-- Block 0 -->
        <div class="flex flex-col items-center h-full py-10 overflow-hidden md:rounded-xl bg-gradient-to-tr from-blue-900 via-indigo-700 to-green-700 md:flex-row" data-rounded="rounded-xl" data-rounded-max="rounded-full">
            <div class="flex justify-start w-full overflow-hidden md:w-1/2 md:pr-0">
                <img src="{{ asset('media/projects/shoothub/CalendarDemo.png') }}" class="object-cover w-full h-full transform translate-x-0 md:translate-x-0" alt="Social project">
            </div>
            <div class="flex flex-col items-center justify-center w-full h-full py-5 pl-16 pr-12 mb-10 md:w-1/2 md:mb-0 md:items-start md:pl-16 lg:pl-10 lg:pr-12">
                <h2 class="inline-block pb-2 mx-auto text-5xl font-bold leading-tight text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-green-400 md:mx-0">Shoot Hub</h2>
                <h3 class="text-5xl font-bold leading-none text-white">Shooting Club intranet.</h3>
                <p class="max-w-sm my-8 text-center text-white opacity-75 md:text-left lg:text-lg md:max-w-none">An intranet for shooting clubs to streamline their administrative tasks.</p>
                <div class="flex flex-row gap-4 flex-wrap justify-center">
                    <a href="{{ route('projects-view', 'shoot-hub') }}" class="px-6 py-2 text-lg font-medium text-white border-2 border-white transition duration-200 hover:scale-105 rounded-full" data-rounded="rounded-full" aria-label="Learn more about the Social project">Shoot Hub</a>
                </div>
            </div>
        </div>
        <!-- Block 1 -->
        <div class="flex flex-col items-center h-full py-10 overflow-hidden md:rounded-xl bg-gradient-to-tr from-purple-900 via-indigo-800 to-pink-600 md:flex-row" data-rounded="rounded-xl" data-rounded-max="rounded-full">
            <div class="flex flex-col items-center justify-center w-full h-full py-5 pl-16 pr-16 mb-10 md:w-1/2 md:mb-0 md:items-start md:pl-10 lg:pl-16 lg:pr-10">
                <h2 class="inline-block mx-auto text-5xl font-bold leading-tight text-transparent sm:text-6xl lg:text-7xl bg-clip-text bg-gradient-to-r from-purple-400 to-pink-400 md:mx-0">Parkour Hub
                </h2>
                <h3 class="text-5xl font-bold leading-none text-white sm:text-6xl lg:text-5xl">Spot sharing platform.</h3>
                <p class="max-w-sm my-8 text-center text-white opacity-75 md:text-left lg:text-lg md:max-w-none">A SaaS platform for parkour athletes to share their spots and engage with the community.</p>
                <a href="{{ route('projects-view', 'parkour-hub') }}" class="px-6 py-2 text-lg font-medium text-white transition duration-200 border-2 border-white hover:scale-105 rounded-full" data-rounded="rounded-full" aria-label="Learn more about the Parkour Hub project">Parkour Hub</a>
            </div>
            <div class="flex justify-end w-full overflow-hidden md:w-1/2 md:pl-0">
                <img src="{{ asset('media/projects/parkourhub/MapDemo.png') }}" class="object-cover w-full h-full transform translate-x-0 md:translate-x-0" alt="Parkour Hub project">
            </div>
        </div>
        <!-- Block 2 -->
        <div class="flex flex-col items-center h-full py-10 overflow-hidden md:rounded-xl bg-gradient-to-tr from-blue-900 via-indigo-700 to-green-700 md:flex-row" data-rounded="rounded-xl" data-rounded-max="rounded-full">
            <div class="flex justify-start w-full overflow-hidden md:w-1/2 md:pr-0">
                <img src="{{ asset('media/projects/social/SocialDemo.png') }}" class="object-cover w-full h-full transform translate-x-0 md:translate-x-0" alt="Social project">
            </div>
            <div class="flex flex-col items-center justify-center w-full h-full py-5 pl-16 pr-12 mb-10 md:w-1/2 md:mb-0 md:items-start md:pl-16 lg:pl-10 lg:pr-12">
                <h2 class="inline-block pb-2 mx-auto text-5xl font-bold leading-tight text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-green-400 md:mx-0">Social Platform</h2>
                <h3 class="text-5xl font-bold leading-none text-white">Laravel &amp; Vue SPA. </h3>
                <p class="max-w-sm my-8 text-center text-white opacity-75 md:text-left lg:text-lg md:max-w-none">A Twitter-inspired social platform Single Page Application built with Laravel &amp; Vue.</p>
                <div class="flex flex-row gap-4 flex-wrap justify-center">
                    <a href="{{ route('projects-view', 'social') }}" class="px-6 py-2 text-lg font-medium text-white transition duration-200 border-2 border-white hover:scale-105 rounded-full" data-rounded="rounded-full" aria-label="Learn more about the Social project">Social</a>
                    <a href="https://github.com/DanielPortwine/Social" class="px-2 py-2 text-lg font-medium text-white transition duration-200 border-2 border-white hover:scale-105 rounded-full" data-rounded="rounded-full" target="_blank" aria-label="View the Social project on GitHub">
                        <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M0 0h24v24H0z" stroke="none"></path><path d="M9 19c-4.3 1.4-4.3-2.5-6-3m12 5v-3.5c0-1 .1-1.4-.5-2 2.8-.3 5.5-1.4 5.5-6a4.6 4.6 0 00-1.3-3.2 4.2 4.2 0 00-.1-3.2s-1.1-.3-3.5 1.3a12.3 12.3 0 00-6.2 0C6.5 2.8 5.4 3.1 5.4 3.1a4.2 4.2 0 00-.1 3.2A4.6 4.6 0 004 9.5c0 4.6 2.7 5.7 5.5 6-.6.6-.6 1.2-.5 2V21"></path></svg>
                    </a>
                </div>
            </div>
        </div>
        <!-- Block 3 -->
        <div class="flex flex-col items-center h-full py-10 overflow-hidden bg-cover md:rounded-xl bg-gradient-to-tr from-cyan-700 via-purple-800 to-indigo-600  md:flex-row" data-rounded="rounded-xl" data-rounded-max="rounded-full">
            <div class="flex flex-col items-center justify-center w-full h-full py-5 pl-16 pr-16 mb-10 md:w-1/2 md:mb-0 md:items-start md:pl-10 lg:pl-16 lg:pr-0">
                <h2 class="inline-block mx-auto text-5xl font-bold leading-tight text-transparent sm:text-6xl lg:text-7xl bg-clip-text bg-gradient-to-r from-purple-200 to-pink-100 md:mx-0">Fruit Machine<br></h2>
                <h3 class="max-w-lg text-5xl font-bold leading-tight text-white">Fun little PHP project.</h3>
                <p class="max-w-sm my-8 text-center text-white opacity-75 md:text-left lg:text-lg md:max-w-none tails-relative">A fun fruit machine game with power-ups and penalties.</p>
                <div class="flex flex-row gap-4 flex-wrap justify-center">
                    <a href="{{ route('projects-view', 'fruit-machine') }}" class="px-6 py-2 text-lg font-medium text-white transition duration-200 border-2 border-white hover:scale-105 rounded-full" data-rounded="rounded-full" aria-label="Learn more about the Fruit Machine project">Fruit Machine</a>
                    <a href="https://github.com/DanielPortwine/Fruit-Machine" class="px-2 py-2 text-lg font-medium text-white transition duration-200 border-2 border-white hover:scale-105 rounded-full" data-rounded="rounded-full" target="_blank" aria-label="View the Fruit Machine project on GitHub">
                        <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M0 0h24v24H0z" stroke="none"></path><path d="M9 19c-4.3 1.4-4.3-2.5-6-3m12 5v-3.5c0-1 .1-1.4-.5-2 2.8-.3 5.5-1.4 5.5-6a4.6 4.6 0 00-1.3-3.2 4.2 4.2 0 00-.1-3.2s-1.1-.3-3.5 1.3a12.3 12.3 0 00-6.2 0C6.5 2.8 5.4 3.1 5.4 3.1a4.2 4.2 0 00-.1 3.2A4.6 4.6 0 004 9.5c0 4.6 2.7 5.7 5.5 6-.6.6-.6 1.2-.5 2V21"></path></svg>
                    </a>
                </div>
            </div>
            <div class="flex justify-end w-full overflow-hidden md:w-1/2 md:pl-0">
                <img src="{{ asset('media/projects/fruitmachine/FruitDemo.png') }}" class="object-cover w-full h-full transform translate-x-0 md:translate-x-0" alt="Fruit Machine project">
            </div>
        </div>
        <!-- Block 4 -->
        <div class="flex flex-col items-center h-full py-10 overflow-hidden md:rounded-xl bg-gradient-to-tr from-blue-700 via-cyan-800 to-green-600 md:flex-row" data-rounded="rounded-xl" data-rounded-max="rounded-full">
            <div class="flex justify-start w-full overflow-hidden md:w-1/2 md:pr-0">
                <img src="{{ asset('media/projects/monkeychat/monkeychat.png') }}" class="object-cover w-full h-full transform translate-x-0 md:translate-x-0" alt="Monkey Chat project">
            </div>
            <div class="flex flex-col items-center justify-center w-full h-full py-5 pl-16 pr-12 mb-10 md:w-1/2 md:mb-0 md:items-start md:pl-16 lg:pl-10 lg:pr-12">
                <h2 class="inline-block pb-2 mx-auto text-5xl font-bold leading-tight text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-green-400 md:mx-0">Monkey Chat</h2>
                <h3 class="text-5xl font-bold leading-none text-white">PHP Chat Site.</h3>
                <p class="max-w-sm my-8 text-center text-white opacity-75 md:text-left lg:text-lg md:max-w-none">A chat site for kids to keep up with their friends in a safe online environment.</p>
                <a href="{{ route('projects-view', 'monkey-chat') }}" class="px-6 py-2 text-lg font-medium text-white transition duration-200 border-2 border-white hover:scale-105 rounded-full" data-rounded="rounded-full" aria-label="Learn more about the Monkey Chat project">Monkey Chat</a>
            </div>
        </div>
    </div>
</section>
<section class="h-auto bg-gray-700">
    <div class="max-w-7xl mx-auto py-8 px-10 sm:py-16 sm:px-6 lg:px-8 sm:text-center tails-relative">
        <h2 class="text-base font-semibold tracking-wide uppercase text-green-400">Open Source<br></h2>
        <p class="mt-1 text-4xl font-extrabold text-white sm:text-5xl sm:tracking-tight lg:text-6xl">Open source contributions<br></p>
        <p class="max-w-3xl mt-5 mx-auto text-xl text-gray-300">Below you'll find my contributions to open source projects.</p>
    </div>
</section>
<section class="py-10 bg-gray-700">
    <div class="container max-w-6xl mx-auto">
        <div class="grid grid-cols-4 gap-10 mt-0 sm:grid-cols-8 lg:grid-cols-12 sm:px-8 xl:px-0">
            <div class="relative flex flex-col items-center justify-between sm:col-start-3 lg:col-start-5 col-span-4 px-8 py-12 space-y-4 overflow-hidden transition-shadow duration-200 bg-gradient-to-br from-blue-700 to-green-400 shadow-xl hover:shadow-2xl rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/opensource/ban-reason-modal.jpg') }}" alt="Ban Reason project">
                <h3 class="text-xl font-medium text-white">Ban Reason<br></h3>
                <p class="text-base text-center text-gray-100">Allow moderators to provide a reason when they ban a user.</p>
                <a class="text-sm text-green-300 hover:text-green-200" href="https://github.com/laravelio/laravel.io/pull/927">View on GitHub</a>
            </div>
        </div>
    </div>
</section>

<x-project-cta />

<x-testimonial />

@endsection
