@extends('layouts.app')

@push('title')Projects | @endpush

@section('description')View my previous projects and open source contributions. | @endsection

@section('content')
<section class="h-auto bg-gray-700 py-12 md:py-20">
    <div class="md:text-center max-w-7xl mx-auto xl:px-0 px-5">
        <p class="font-medium mb-4 sm:text-lg uppercase tracking-wide text-green-500">Previous Projects<br></p>
        <h1 class="text-4xl font-extrabold tracking-normal text-white sm:text-5xl lg:text-7xl md:leading-none">Explore my previous projects<br></h1>
        <p class="max-w-none mx-auto mt-3 text-xl font-normal text-gray-300 sm:mt-5 sm:text-xl md:mt-5 lg:text-2xl md:max-w-4xl">See some of the work I've completed to give you inspiration for your own ideas. If you see anything you like, make sure you <a class="text-green-300 hover:text-green-200" href="{{ route('contact') }}">get in touch</a>.<br></p>
    </div>
</section>
<section class="h-auto bg-gray-700">
    <div class="px-0 py-10 mx-auto space-y-10 max-w-7xl md:px-10">
        <!-- Block 1 -->
        <div class="flex flex-col items-center h-full py-10 overflow-hidden md:rounded-xl bg-gradient-to-tr from-purple-900 via-indigo-800 to-pink-600 md:flex-row" data-rounded="rounded-xl" data-rounded-max="rounded-full">
            <div class="flex flex-col items-center justify-center w-full h-full py-5 pl-16 pr-16 mb-10 md:w-1/2 md:mb-0 md:items-start md:pl-10 lg:pl-16 lg:pr-10">
                <h2 class="inline-block mx-auto text-5xl font-bold leading-tight text-transparent sm:text-6xl lg:text-7xl bg-clip-text bg-gradient-to-r from-purple-400 to-pink-400 md:mx-0">Parkour Hub
                </h2>
                <h3 class="text-5xl font-bold leading-none text-white sm:text-6xl lg:text-7xl">Spot sharing platform.</h3>
                <p class="max-w-sm my-8 text-center text-white opacity-75 md:text-left lg:text-lg md:max-w-none">Parkour Hub is a SaaS platform for parkour athletes to share their spots and engage with the community.</p>
                <a href="{{ route('projects-view', 'parkour-hub') }}" class="px-6 py-2 text-lg font-medium text-white hover:text-green-300 border-2 border-white hover:border-green-300 rounded-full" data-rounded="rounded-full">Learn More</a>
            </div>

            <div class="flex justify-end w-full overflow-hidden md:w-1/2 md:pl-0">
                <img src="{{ asset('media/projects/parkourhub/MapDemo.png') }}" class="object-cover w-full h-full transform translate-x-0 md:translate-x-0">
            </div>
        </div>
        <!-- Block 2 -->
        <div class="flex flex-col items-center h-full py-10 overflow-hidden md:rounded-xl bg-gradient-to-tr from-blue-900 via-indigo-700 to-green-700 md:flex-row" data-rounded="rounded-xl" data-rounded-max="rounded-full">
            <div class="flex justify-start w-full overflow-hidden md:w-1/2 md:pr-0">
                <img src="{{ asset('media/projects/social/SocialDemo.png') }}" class="object-cover w-full h-full transform translate-x-0 md:translate-x-0">
            </div>
            <div class="flex flex-col items-center justify-center w-full h-full py-5 pl-16 pr-12 mb-10 md:w-1/2 md:mb-0 md:items-start md:pl-16 lg:pl-10 lg:pr-12">
                <h2 class="inline-block pb-2 mx-auto text-5xl font-bold leading-tight text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-green-400 md:mx-0">Social Platform</h2>
                <h3 class="text-5xl font-bold leading-none text-white">Laravel &amp; Vue SPA. </h3>
                <p class="max-w-sm my-8 text-center text-white opacity-75 md:text-left lg:text-lg md:max-w-none">A Twitter-inspired social platform Single Page Application built with Laravel &amp; Vue.</p>
                <div class="flex flex-row gap-4 flex-wrap justify-center">
                    <a href="{{ route('projects-view', 'social') }}" class="px-6 py-2 text-lg font-medium text-white hover:text-green-300 border-2 border-white hover:border-green-300 rounded-full" data-rounded="rounded-full">Learn More</a>
                    <a href="https://github.com/DanielPortwine/Social" class="px-2 py-2 text-lg font-medium text-white hover:text-green-300 border-2 border-white hover:border-green-300 rounded-full" data-rounded="rounded-full" target="_blank">
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
                <p class="max-w-sm my-8 text-center text-white opacity-75 md:text-left lg:text-lg md:max-w-none tails-relative">One of my first PHP projects, before learning Laravel. A fun fruit machine game with power-ups and penalties.<br></p>
                <div class="flex flex-row gap-4 flex-wrap justify-center">
                    <a href="{{ route('projects-view', 'fruit-machine') }}" class="px-6 py-2 text-lg font-medium text-white hover:text-green-300 border-2 border-white hover:border-green-300 rounded-full" data-rounded="rounded-full">Learn More</a>
                    <a href="https://github.com/DanielPortwine/Fruit-Machine" class="px-2 py-2 text-lg font-medium text-white hover:text-green-300 border-2 border-white hover:border-green-300 rounded-full" data-rounded="rounded-full" target="_blank">
                        <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M0 0h24v24H0z" stroke="none"></path><path d="M9 19c-4.3 1.4-4.3-2.5-6-3m12 5v-3.5c0-1 .1-1.4-.5-2 2.8-.3 5.5-1.4 5.5-6a4.6 4.6 0 00-1.3-3.2 4.2 4.2 0 00-.1-3.2s-1.1-.3-3.5 1.3a12.3 12.3 0 00-6.2 0C6.5 2.8 5.4 3.1 5.4 3.1a4.2 4.2 0 00-.1 3.2A4.6 4.6 0 004 9.5c0 4.6 2.7 5.7 5.5 6-.6.6-.6 1.2-.5 2V21"></path></svg>
                    </a>
                </div>
            </div>

            <div class="flex justify-end w-full overflow-hidden md:w-1/2 md:pl-0">
                <img src="{{ asset('media/projects/fruitmachine/FruitDemo.png') }}" class="object-cover w-full h-full transform translate-x-0 md:translate-x-0">
            </div>
        </div>
        <!-- Block 4 -->
        <div class="flex flex-col items-center h-full py-10 overflow-hidden md:rounded-xl bg-gradient-to-tr from-blue-700 via-cyan-800 to-green-600 md:flex-row" data-rounded="rounded-xl" data-rounded-max="rounded-full">
            <div class="flex justify-start w-full overflow-hidden md:w-1/2 md:pr-0">
                <img src="{{ asset('media/projects/monkeychat/monkeychat.png') }}" class="object-cover w-full h-full transform translate-x-0 md:translate-x-0">
            </div>
            <div class="flex flex-col items-center justify-center w-full h-full py-5 pl-16 pr-12 mb-10 md:w-1/2 md:mb-0 md:items-start md:pl-16 lg:pl-10 lg:pr-12">
                <h2 class="inline-block pb-2 mx-auto text-5xl font-bold leading-tight text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-green-400 md:mx-0">Monkey Chat</h2>
                <h3 class="text-5xl font-bold leading-none text-white">PHP Chat Site.</h3>
                <p class="max-w-sm my-8 text-center text-white opacity-75 md:text-left lg:text-lg md:max-w-none">A chat site for children to keep up with their friends in a safe online environment. My A-level computer science project.</p>
                <a href="{{ route('projects-view', 'monkey-chat') }}" class="px-6 py-2 text-lg font-medium text-white hover:text-green-300 border-2 border-white hover:border-green-300 rounded-full" data-rounded="rounded-full">Learn More</a>
            </div>
        </div>
    </div>
</section>
<section class="h-auto bg-gray-700">
    <div class="max-w-7xl mx-auto py-8 px-10 sm:py-16 sm:px-6 lg:px-8 sm:text-center tails-relative">
        <h2 class="text-base font-semibold tracking-wide uppercase text-green-500">Open Source<br></h2>
        <p class="mt-1 text-4xl font-extrabold text-white sm:text-5xl sm:tracking-tight lg:text-6xl">Open source contributions<br></p>
        <p class="max-w-3xl mt-5 mx-auto text-xl text-gray-300">Below you'll find my contributions to open source projects.</p>
    </div>
</section>
<section class="py-10 bg-gray-700">
    <div class="container max-w-6xl mx-auto">
        <div class="grid grid-cols-4 gap-10 mt-0 sm:grid-cols-8 lg:grid-cols-12 sm:px-8 xl:px-0">
            <div class="relative flex flex-col items-center justify-between sm:col-start-3 lg:col-start-5 col-span-4 px-8 py-12 space-y-4 overflow-hidden transition-shadow duration-200 bg-gradient-to-br from-blue-700 to-green-500 shadow-xl hover:shadow-2xl rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/opensource/ban-reason-modal.jpg') }}">
                <h4 class="text-xl font-medium text-white">Ban Reason<br></h4>
                <p class="text-base text-center text-gray-100">Allow moderators to provide a reason when they ban a user.</p>
                <a class="text-sm text-green-300 hover:text-green-200" href="https://github.com/laravelio/laravel.io/pull/927">View on GitHub</a>
            </div>

{{--            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">--}}
{{--                <div class="p-3 text-white bg-blue-500 rounded-full" data-primary="blue-500" data-rounded="rounded-full">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M18 8a3 3 0 0 1 0 6"></path><path d="M10 8v11a1 1 0 0 1 -1 1h-1a1 1 0 0 1 -1 -1v-5"></path><path d="M12 8h0l4.524 -3.77a0.9 .9 0 0 1 1.476 .692v12.156a0.9 .9 0 0 1 -1.476 .692l-4.524 -3.77h-8a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h8"></path></svg>--}}
{{--                </div>--}}
{{--                <h4 class="text-xl font-medium text-gray-700">Notifications</h4>--}}
{{--                <p class="text-base text-center text-gray-500">Send out notifications to all your customers to keep them engaged.</p>--}}
{{--            </div>--}}

{{--            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">--}}
{{--                <div class="p-3 text-white bg-blue-500 rounded-full" data-primary="blue-500" data-rounded="rounded-full">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"></polyline><line x1="12" y1="12" x2="20" y2="7.5"></line><line x1="12" y1="12" x2="12" y2="21"></line><line x1="12" y1="12" x2="4" y2="7.5"></line><line x1="16" y1="5.25" x2="8" y2="9.75"></line></svg>--}}
{{--                </div>--}}
{{--                <h4 class="text-xl font-medium text-gray-700">Bundles</h4>--}}
{{--                <p class="text-base text-center text-gray-500">High-quality bundles of awesome tools to help you out.</p>--}}
{{--            </div>--}}

{{--            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">--}}
{{--                <div class="p-3 text-white bg-blue-500 rounded-full" data-primary="blue-500" data-rounded="rounded-full">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 9l3 3l-3 3"></path><line x1="13" y1="15" x2="16" y2="15"></line><rect x="3" y="4" width="18" height="16" rx="2"></rect></svg>--}}
{{--                </div>--}}
{{--                <h4 class="text-xl font-medium text-gray-700">Developer Tools</h4>--}}
{{--                <p class="text-base text-center text-gray-500">Developer tools to help grow your application and keep it up-to-date.</p>--}}
{{--            </div>--}}

{{--            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">--}}
{{--                <div class="p-3 text-white bg-blue-500 rounded-full" data-primary="blue-500" data-rounded="rounded-full">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="9.5" y1="11" x2="9.51" y2="11"></line><line x1="14.5" y1="11" x2="14.51" y2="11"></line><path d="M9.5 15a3.5 3.5 0 0 0 5 0"></path><path d="M7 5h1v-2h8v2h1a3 3 0 0 1 3 3v9a3 3 0 0 1 -3 3v1h-10v-1a3 3 0 0 1 -3 -3v-9a3 3 0 0 1 3 -3" class=""></path></svg>--}}
{{--                </div>--}}
{{--                <h4 class="text-xl font-medium text-gray-700">Building Blocks</h4>--}}
{{--                <p class="text-base text-center text-gray-500">The right kind of building blocks to take your company to the next level.</p>--}}
{{--            </div>--}}

{{--            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">--}}
{{--                <div class="p-3 text-white bg-blue-500 rounded-full" data-primary="blue-500" data-rounded="rounded-full">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="15" y1="5" x2="15" y2="7"></line><line x1="15" y1="11" x2="15" y2="13"></line><line x1="15" y1="17" x2="15" y2="19"></line><path d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2"></path></svg>--}}
{{--                </div>--}}
{{--                <h4 class="text-xl font-medium text-gray-700">Coupons</h4>--}}
{{--                <p class="text-base text-center text-gray-500">Coupons system to provide special offers and discounts for your app.</p>--}}
{{--            </div>--}}

        </div>
    </div>
</section>
<section class="h-auto bg-gray-700">
    <div class="max-w-7xl mx-auto py-8 px-10 sm:py-12 sm:px-6 lg:px-8 sm:text-center tails-relative">
        <h2 class="text-base font-semibold tracking-wide uppercase text-green-500">Functionality<br></h2>
        <p class="mt-1 text-4xl font-extrabold text-white sm:text-5xl sm:tracking-tight lg:text-6xl">Smaller projects<br></p>
        <p class="max-w-3xl mt-5 mx-auto text-xl text-gray-300">Some examples of smaller projects or single pieces of functionality I've completed.</p>
    </div>
</section>
<section class="bg-gray-700">
    <div class="relative">
        <div class="relative px-6 py-6 ml-auto mr-auto bg-top bg-cover sm:py-8 max-w-7xl md:px-24 lg:px-16">
            <div class="relative grid gap-6 bg-top bg-cover sm:grid-cols-2 lg:grid-cols-4">
                <div class="flex flex-col items-start justify-between p-6 space-y-4 overflow-hidden transition-shadow duration-200 bg-gradient-to-tr from-cyan-500 to-green-500 bg-top bg-cover shadow-xl rounded-2xl group hover:shadow-2xl">
                    <p class="font-bold text-white">Login With Facebook<br></p>
                    <p class="text-sm leading-5 text-gray-100">Add a button to the login &amp; register forms to login using a Facebook account.<br></p>
                </div>
                <div class="flex flex-col items-start justify-between p-6 space-y-4 overflow-hidden transition-shadow duration-200 bg-gradient-to-tr from-cyan-500 to-green-500 bg-top bg-cover shadow-xl rounded-2xl group hover:shadow-2xl tails-relative">
                    <p class="font-bold text-white">Google Maps<br></p>
                    <p class="text-sm leading-5 text-gray-100">Display a Google Maps Embed on your site to help customers find you.</p>
                </div>
                <div class="flex flex-col items-start justify-between p-6 space-y-4 overflow-hidden transition-shadow duration-200 bg-gradient-to-tr from-cyan-500 to-green-500 bg-top bg-cover shadow-xl rounded-2xl group hover:shadow-2xl">
                    <p class="font-bold text-white">reCaptcha<br></p>
                    <p class="text-sm leading-5 text-gray-100">Prevent bots from overloading your server and notification pathways via forms.</p>
                </div>
                <div class="flex flex-col items-start justify-between p-6 space-y-4 overflow-hidden transition-shadow duration-200 bg-gradient-to-tr from-cyan-500 to-green-500 bg-top bg-cover shadow-xl rounded-2xl group hover:shadow-2xl">
                    <p class="font-bold text-white">AWS S3 File Download<br></p>
                    <p class="text-sm leading-5 text-gray-100">Click to download a file from a private AWS S3 bucket.</p>
                </div>
                <div class="flex flex-col items-start justify-between p-6 space-y-4 overflow-hidden transition-shadow duration-200 bg-gradient-to-tr from-cyan-500 to-green-500 bg-top bg-cover shadow-xl rounded-2xl group hover:shadow-2xl">
                    <p class="font-bold text-white">AWS SNS Contact Form<br></p>
                    <p class="text-sm leading-5 text-gray-100">Receive an email notification with details from an online contact form using AWS SNS.</p>
                </div>
                <div class="flex flex-col items-start justify-between p-6 space-y-4 overflow-hidden transition-shadow duration-200 bg-gradient-to-tr from-cyan-500 to-green-500 bg-top bg-cover shadow-xl rounded-2xl group hover:shadow-2xl">
                    <p class="font-bold text-white">Laravel Vapor<br></p>
                    <p class="text-sm leading-5 text-gray-100">Easily provision and deploy your Laravel app to a serverless environment on AWS.</p>
                </div>
                <div class="flex flex-col items-start justify-between p-6 space-y-4 overflow-hidden transition-shadow duration-200 bg-gradient-to-tr from-cyan-500 to-green-500 bg-top bg-cover shadow-xl rounded-2xl group hover:shadow-2xl">
                    <p class="font-bold text-white">Laravel Forge<br></p>
                    <p class="text-sm leading-5 text-gray-100">Easily provision and deploy your Laravel app to a server or instance.</p>
                </div>
                <div class="flex flex-col items-start justify-between p-6 space-y-4 overflow-hidden transition-shadow duration-200 bg-gradient-to-tr from-cyan-500 to-green-500 bg-top bg-cover shadow-xl rounded-2xl group hover:shadow-2xl">
                    <p class="font-bold text-white">Discord Message Censor<br></p>
                    <p class="text-sm leading-5 text-gray-100">A simple Discord bot to automatically delete messages containing a certain word.<br></p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('components.testimonial')

@endsection
