@extends('layouts.app')

@section('description')@endsection

@section('content')
<section class="w-full text-white bg-gray-700 mt-12">
    <div class="px-8 mx-auto max-w-7xl lg:px-16">
        <div class="relative flex flex-col items-center lg:flex-row">
            <div class="flex justify-start w-full md:py-12 lg:py-32 lg:w-1/3">
                <div class="flex flex-col items-center justify-center w-full lg:items-start lg:max-w-lg">
                    <p class="inline-block mb-4 text-xs font-medium tracking-wider text-green-400 uppercase" data-primary="green-400">
                        Laravel Development.
                    </p>
                    <h5 class="text-6xl font-thin leading-none text-center mb-7 lg:text-left md:text-7xl">
                        <span class="block">Daniel</span>
                        <span class="block font-bold">Portwine</span>
                    </h5>
                    <a class="inline-flex items-center justify-center px-8 py-4 mr-6 text-xl font-medium tracking-wide text-black transition duration-200 bg-green-400 hover:bg-green-500 focus:shadow-outline focus:outline-none" data-primary="green-400" data-rounded="" href="{{ route('contact') }}">
                        Get started
                    </a>
                </div>
            </div>
            <div class="relative w-full h-auto pt-16 lg:w-2/3">
                <img src="{{ asset('media/header-right-graphic.png') }}" class="w-full h-auto" alt="Header graphic">
            </div>
        </div>
    </div>
    <div class="items-center w-full h-auto py-12 bg-green-400 lg:-mt-16" data-primary="green-400">
        <div class="flex mx-auto max-w-7xl lg:px-16">
            <div class="flex flex-col items-center w-full pr-5 lg:w-1/3 lg:flex-row">
                <p class="w-full mb-5 text-base text-center text-black lg:text-left lg:mb-0" data-primary="green-400">Turning your ideas into reality!</p>
            </div>
            <div class="hidden w-2/3 lg:block"></div>
        </div>
    </div>
</section>
{{--<section class="bg-gray-700 pt-7 pb-14">--}}
{{--    <div class="container px-8 mx-auto sm:px-12 lg:px-20">--}}
{{--        <div class="flex grid items-center justify-center grid-cols-4 grid-cols-12 gap-y-8">--}}
{{--            <a class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2" href="https://laravel.com/">--}}
{{--                <img src="{{ asset('media/laravel.png') }}" alt="Laravel" class="block object-contain h-9">--}}
{{--            </a>--}}
{{--            <a class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2" href="https://www.php.net/">--}}
{{--                <img src="{{ asset('media/php.png') }}" alt="PHP" class="block object-contain h-9">--}}
{{--            </a>--}}
{{--            <a class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2" href="https://www.mysql.com/">--}}
{{--                <img src="{{ asset('media/mysql.png') }}" alt="MySQL" class="block object-contain h-10">--}}
{{--            </a>--}}
{{--            <a class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-6 xl:col-span-2" href="https://aws.amazon.com/">--}}
{{--                <img src="{{ asset('media/aws.png') }}" alt="AWS" class="block object-contain h-9">--}}
{{--            </a>--}}
{{--            <a class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-6 xl:col-span-2" href="https://vuejs.org/">--}}
{{--                <img src="{{ asset('media/vue.png') }}" alt="Vue" class="block object-contain h-9">--}}
{{--            </a>--}}
{{--            <a class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2" href="https://developers.google.com/">--}}
{{--                <img src="https://cdn.devdojo.com/tails/images/google.svg" alt="Google" class="block object-contain h-9">--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<section class="py-20 bg-gray-700">
    <div class="container items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
        <div class="flex flex-wrap items-center -mx-3">
            <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
                <div class="w-full lg:max-w-md tails-relative">
                    <h2 class="mb-4 text-3xl font-bold text-white leading-tight tracking-tight sm:text-4xl font-heading">Secure web apps to solve your problems!</h2>
                    <p class="mb-4 font-medium tracking-tight text-gray-300 xl:mb-6">I write efficient, secure code in Laravel/PHP. Some of the areas I specialise in are:</p>
                    <ul>
                        <li class="flex items-center py-2 space-x-4 xl:py-3">
                            <svg class="w-8 h-8 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                            <span class="font-medium text-white">Bespoke Web Software</span>
                        </li>
                        <li class="flex items-center py-2 space-x-4 xl:py-3">
                            <svg class="w-8 h-8 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                            <span class="font-medium text-white">API Integrations</span>
                        </li>
                        <li class="flex items-center py-2 space-x-4 xl:py-3">
                            <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                            <span class="font-medium text-white">Testing and Security</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0">
                <img class="mx-auto sm:max-w-sm lg:max-w-full" src="{{ asset('media/feature-graphic.png') }}" alt="Feature graphic">
            </div>
        </div>
    </div>
</section>
<section class="flex items-center justify-center py-20 bg-gray-700 min-w-screen">
    <div class="px-16 bg-gray-700">
        <div class="container flex flex-col items-start mx-auto lg:items-center">
            <p class="relative flex items-start justify-start w-full text-lg font-bold tracking-wider uppercase lg:justify-center lg:items-center text-green-500" data-primary="purple-500">Don't just take my word for it</p>
            <h2 class="relative flex items-start justify-start w-full max-w-3xl text-5xl text-white font-bold lg:justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute right-0 hidden w-12 h-12 -mt-2 -mr-16 text-gray-200 lg:inline-block" viewBox="0 0 975.036 975.036">
                    <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z" class="">
                    </path>
                </svg>
                See what others are saying
            </h2>
            <div class="items-center justify-center w-full mt-12 mb-4 lg:flex">
                <div class="flex flex-col items-start justify-start w-full h-auto mb-12 lg:w-1/3 lg:mb-0">
                    <div class="flex items-center justify-center">
                        <div class="flex flex-col items-start justify-center">
                            <h3 class="font-bold text-white">JP<br></h3>
                        </div>
                    </div>
                    <blockquote class="mt-8 text-lg text-gray-300">"Thank you for all your work on Feature Hub 2.0. It looks and works so
                        much better now and definitely fits with our branding more!"</blockquote>
                </div>
                <div class="flex flex-col items-start justify-start w-full h-auto px-0 mx-0 mb-12 border-l border-r border-transparent lg:w-1/3 lg:mb-0 lg:px-8 lg:mx-8 lg:border-gray-200">
                    <div class="flex items-center justify-center">
                        <div class="flex flex-col items-start justify-center">
                            <h3 class="font-bold text-white">Neil<br></h3>
                        </div>
                    </div>
                    <blockquote class="mt-8 text-lg text-gray-300">"Thanks for your hard work on the PartnerHub :-)"</blockquote>
                </div>
                <div class="flex flex-col items-start justify-start w-full h-auto lg:w-1/3">
                    <div class="flex items-center justify-center">
                        <div class="flex flex-col items-start justify-center">
                            <h4 class="font-bold text-white">Jacob<br></h4>
                        </div>
                    </div>
                    <blockquote class="mt-8 text-lg text-gray-300">"Ah mint. Thanks for all your help! Everyone is chuffed to bits with it!"</blockquote>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="w-full px-4 bg-gray-700 lg:px-0">
    <div class="max-w-6xl py-8 mx-auto">
        <h2 class="flex justify-start w-full text-4xl font-black text-left md:text-5xl md:text-center md:justify-center">
            <h2 class="text-4xl font-bold tracking-tight text-center text-white">Previous Projects</h2>
            <p class="mt-2 text-lg text-center text-gray-300">Check out some of my previous projects below.</p>
        </h2>
        <div class="grid grid-cols-4 gap-8 mt-10 sm:grid-cols-8 lg:grid-cols-12 sm:px-8 xl:px-0">
            <a class="relative flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 overflow-hidden transition-shadow duration-200 bg-gradient-to-tr from-cyan-500 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full" href="{{ route('projects-view', 'parkour-hub') }}">
                <img src="{{ asset('media/projects/parkourhub/MapDemo.png') }}" alt="Parkour Hub project">
                <h3 class="text-xl font-medium text-white text-center">Parkour Hub<br></h3>
                <p class="text-base text-center text-gray-100">Parkour Hub is a SaaS platform for parkour athletes to share their spots and engage with the community.</p>
            </a>
            <a class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-500 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full" href="{{ route('projects-view', 'social') }}">
                <img src="{{ asset('media/projects/social/SocialDemo.png') }}" alt="Social project">
                <h3 class="text-xl font-medium text-white">Social Platform<br></h3>
                <p class="text-base text-center text-gray-100">A Twitter-inspired social platform Single Page Application built with Laravel &amp; Vue.</p>
            </a>
            <a class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-500 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full" href="{{ route('projects-view', 'fruit-machine') }}">
                <img src="{{ asset('media/projects/fruitmachine/FruitDemo.png') }}" alt="Fruit Machine project">
                <h3 class="text-xl font-medium text-white">Fruit Machine<br></h3>
                <p class="text-base text-center text-gray-100">One of my first PHP projects, before learning Laravel. A fun fruit machine game with power-ups and penalties.</p>
            </a>
        </div>
        <div class="w-full mt-10 mb-2 text-center">
            <a href="{{ route('projects') }}" class="mx-auto text-lg font-medium underline text-green-500">View All Projects</a>
        </div>
    </div>
</section>
<section class="w-full pt-12 pb-16 bg-gray-700">
    <div class="relative px-12 mx-auto max-w-7xl">
        <div class="relative grid items-center grid-cols-1 gap-10 p-12 overflow-hidden shadow-2xl md:p-16 lg:p-20 xl:p-24 bg-gradient-to-r from-green-400 to-green-500 rounded-2xl md:grid-cols-5 lg:gap-0" data-primary="green-400" data-rounded="rounded-2xl" data-rounded-max="rounded-full">
            <div class="absolute top-0 right-0">
                <svg viewBox="0 0 487 487" class="object-cover w-full h-full" xmlns="http://www.w3.org/2000/svg"><path d="M487 486.7c-66.1-3.6-132.3-7.3-186.3-37s-95.9-85.3-126.2-137.2c-30.4-51.8-49.3-99.9-76.5-151.4C70.9 109.6 35.6 54.8.3 0H487v486.7z" fill="#FFF" fill-rule="nonzero" fill-opacity=".1"></path></svg>
            </div>
            <div class="absolute bottom-0 left-0 h-full">
                <svg viewBox="0 0 487 487" class="w-auto h-full opacity-75 object-stretch" xmlns="http://www.w3.org/2000/svg"><path d="M0 .3c67 2.1 134.1 4.3 186.3 37 52.2 32.7 89.6 95.8 112.8 150.6 23.2 54.8 32.3 101.4 61.2 149.9 28.9 48.4 77.7 98.8 126.4 149.2H0V.3z" fill="#FFF" fill-rule="nonzero" fill-opacity=".1"></path></svg>
            </div>
            <div class="relative z-30 col-span-1 md:col-span-3">
                <h2 class="mb-1 text-3xl font-bold leading-tight text-white md:mb-3 md:text-3xl lg:text-4xl xl:text-5xl">Ready to get started? <span class="block lg:mt-3">Get in touch now.</span></h2>
                <p class="max-w-sm my-6 text-base font-normal text-green-100 xl:max-w-lg lg:pr-0 pr-7 lg:text-xl" data-primary="green-400">Are you ready to build the web app of your dreams? Get in touch to see if we'll be a good fit.</p>
                <a href="{{ route('contact') }}" class="flex items-center justify-center w-full px-4 py-2 text-base font-medium leading-6 text-green-700 whitespace-no-wrap bg-white border-2 border-transparent rounded-full shadow-sm md:w-auto md:inline-flex hover:bg-transparent hover:text-white hover:border-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-600" data-primary="green-400" data-rounded="rounded-full">
                    Get Started
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
