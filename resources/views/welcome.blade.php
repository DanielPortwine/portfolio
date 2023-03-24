@extends('layouts.app')

@section('description')From automating mundane tasks to bringing your revolutionary concept to life, my secure web apps provide the perfect balance of functionality and peace of mind.@endsection

@section('content')
<section class="w-full text-white bg-gray-700 mt-12">
    <div class="px-8 mx-auto max-w-7xl lg:px-16">
        <div class="relative flex flex-col items-center lg:flex-row">
            <div class="flex justify-start w-full md:py-12 lg:py-32 lg:w-1/3">
                <div class="flex flex-col items-center justify-center w-full lg:items-start lg:max-w-lg">
                    <p class="inline-block mb-4 text-md font-medium tracking-wider text-green-400 uppercase" data-primary="green-400">
                        Daniel Portwine
                    </p>
                    <h5 class="text-6xl font-thin leading-none text-center mb-7 lg:text-left md:text-7xl">
                        <span class="block">Web App</span>
                        <span class="block font-bold">Developer</span>
                    </h5>
                    <a class="inline-flex items-center justify-center px-8 py-4 mr-6 text-xl font-medium tracking-wide text-black transition duration-200 bg-green-400 hover:scale-105 rounded-full" data-primary="green-400" data-rounded="" href="{{ route('contact') }}">
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
<section class="py-16 bg-gray-700">
    <div class="container items-center max-w-7xl px-4 mx-auto sm:px-20 md:px-32 lg:px-16">
        <div class="flex flex-wrap items-center -mx-3">
            <div class="order-1 w-full px-3 lg:order-0">
                <div class="w-full tails-relative">
                    <h2 class="mb-4 text-3xl font-bold text-white leading-tight tracking-tight sm:text-4xl font-heading">Secure web apps to solve your problems!</h2>
                    <p class="mb-4 font-medium tracking-tight text-gray-300">
                        In today's fast-paced digital age, businesses and individuals alike need efficient, secure solutions to keep up with the ever-evolving landscape.
                        One of the most effective ways to achieve this is through the use of secure web apps.
                        Whether you're a small business owner looking to streamline your administrative tasks, or an entrepreneur with an ambitious idea for the next groundbreaking innovation, a web app designed to cater to your unique needs and challenges will catapult you towards achieving your goals, maximizing productivity, and ensuring a competitive edge.
                    </p>
                    <p class="mb-4 font-medium tracking-tight text-gray-300 xl:mb-6">
                        As an experienced developer, I am dedicated to creating cutting-edge, custom web applications that not only solve your problems but exceed your expectations.
                        From automating mundane tasks to bringing your revolutionary concept to life, my secure web apps provide the perfect balance of functionality and peace of mind.
                        Let me help you transform your vision into reality, and elevate your business to new heights with top-notch web app solutions.
                    </p>
                    <div class="flex gap-x-12 items-center justify-center flex-wrap my-4">
                        <div class="flex items-center py-2 space-x-4 xl:py-3">
                            <svg class="w-8 h-8 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                            <span class="font-medium text-white">Software as a Service (SaaS)</span>
                        </div>
                        <div class="flex items-center py-2 space-x-4 xl:py-3">
                            <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                            <span class="font-medium text-white">Intranets</span>
                        </div>
                        <div class="flex items-center py-2 space-x-4 xl:py-3">
                            <svg class="w-8 h-8 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                            <span class="font-medium text-white">API & AI Integrations</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="flex items-center justify-center py-16 bg-green-400">
    <div class="px-4 lg:px-16 bg-green-400 mx-auto max-w-7xl">
        <div class="container flex flex-col items-start mx-auto lg:items-center">
            <p class="relative flex items-start justify-start w-full text-lg font-bold tracking-wider uppercase lg:justify-center lg:items-center text-green-800" data-primary="purple-500">
                Don't just take my word for it
            </p>
            <h2 class="relative flex items-start justify-start w-full max-w-3xl text-4xl text-black font-bold lg:justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute right-0 hidden w-8 h-8 -mt-2 -mr-16 text-gray-800 lg:inline-block" viewBox="0 0 975.036 975.036">
                    <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z" class="">
                    </path>
                </svg>
                See what others are saying
            </h2>
            <div class="items-top justify-center w-full mt-12 mb-4 lg:flex">
                <div class="flex flex-col items-start justify-start w-full h-auto mb-12 lg:w-1/3 lg:mb-0">
                    <div class="flex items-center justify-center">
                        <div class="flex flex-col items-start justify-center">
                            <h3 class="font-bold text-black">JP<br></h3>
                        </div>
                    </div>
                    <blockquote class="mt-8 text-lg text-gray-800">
                        "Thank you for all your work on Feature Hub 2.0. It looks and works so
                        much better now and definitely fits with our branding more!"
                    </blockquote>
                </div>
                <div class="flex flex-col items-start justify-start w-full h-auto px-0 mx-0 mb-12 border-l border-r border-transparent lg:w-1/3 lg:mb-0 lg:px-8 lg:mx-8 lg:border-gray-800">
                    <div class="flex items-center justify-center">
                        <div class="flex flex-col items-start justify-center">
                            <h3 class="font-bold text-black">Neil<br></h3>
                        </div>
                    </div>
                    <blockquote class="mt-8 text-lg text-gray-800">"Thanks for your hard work on the PartnerHub :-)"</blockquote>
                </div>
                <div class="flex flex-col items-start justify-start w-full h-auto lg:w-1/3">
                    <div class="flex items-center justify-center">
                        <div class="flex flex-col items-start justify-center">
                            <h4 class="font-bold text-black">Jacob<br></h4>
                        </div>
                    </div>
                    <blockquote class="mt-8 text-lg text-gray-800">"Thanks for all your help! Everyone is chuffed to bits with it!"</blockquote>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="w-full px-4 bg-gray-700 lg:px-0">
    <div class="max-w-6xl py-16 mx-auto">
        <h2 class="flex justify-start w-full text-4xl font-black text-left md:text-5xl md:text-center md:justify-center">
            <h2 class="text-4xl font-bold tracking-tight text-center text-white">Previous Projects</h2>
        </h2>
        <div class="grid grid-cols-4 gap-8 mt-10 sm:grid-cols-8 lg:grid-cols-12 sm:px-8 xl:px-0">
            <a class="flex flex-col items-top col-span-4 transition duration-200 bg-gray-600 bg-top bg-cover shadow-xl hover:shadow-2xl hover:scale-105 rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full" href="{{ route('projects-view', 'shoot-hub') }}">
                <img src="{{ asset('media/projects/shoothub/CalendarDemo.png') }}" class="rounded-t-xl" alt="Social project">
                <div class="p-6 mt-0 text-center">
                    <h3 class="text-xl font-medium text-white">Shoot Hub<br></h3>
                    <p class="text-base text-gray-100">An intranet for shooting clubs to streamline their administrative tasks.</p>
                </div>
            </a>
            <a class="relative flex flex-col items-top col-span-4 overflow-hidden transition duration-200 bg-gray-600 bg-top bg-cover shadow-xl hover:shadow-2xl hover:scale-105 rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full" href="{{ route('projects-view', 'parkour-hub') }}">
                <img src="{{ asset('media/projects/parkourhub/MapDemo.png') }}" class="rounded-t-xl" alt="Parkour Hub project">
                <div class="p-6 mt-0 text-center">
                    <h3 class="text-xl font-medium text-white text-center">Parkour Hub<br></h3>
                    <p class="text-base text-center text-gray-100">A SaaS platform for parkour athletes to share their spots and engage with the community.</p>
                </div>
            </a>
            <a class="flex flex-col items-top col-span-4 transition duration-200 bg-gray-600 bg-top bg-cover shadow-xl hover:shadow-2xl hover:scale-105 rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full" href="{{ route('projects-view', 'fruit-machine') }}">
                <img src="{{ asset('media/projects/fruitmachine/FruitDemo.png') }}" class="rounded-t-xl" alt="Fruit Machine project">
                <div class="p-6 mt-0 text-center">
                    <h3 class="text-xl font-medium text-white">Fruit Machine<br></h3>
                    <p class="text-base text-center text-gray-100">A fun fruit machine game with power-ups and penalties.</p>
                </div>
            </a>
        </div>
        <div class="w-full mt-10 mb-2 text-center">
            <a href="{{ route('projects') }}" class="mx-auto text-lg font-medium underline transition duration-200 text-green-400 hover:text-green-500">View All Projects</a>
        </div>
    </div>
</section>
<x-project-cta />
@endsection
