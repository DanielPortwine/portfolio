@extends('layouts.app')

@push('title')Parkour Hub Project | @endpush

@section('description')A Laravel SaaS platform for parkour athletes to share spots and engage with the community. | @endsection

@section('content')
<section class="px-2 pt-12 md:pt-20 bg-gray-700 md:px-0">
    <div class="container items-center max-w-6xl px-5 mx-auto space-y-6 text-center">
        <h1 class="text-4xl font-extrabold tracking-tight text-left text-white sm:text-5xl md:text-6xl md:text-center">
            <span class="block">Parkour Hub</span>
        </h1>
        <p class="w-full mx-auto text-base text-left text-gray-300 md:max-w-md sm:text-lg lg:text-2xl md:max-w-3xl md:text-center">
            A SaaS platform for parkour athletes to share their spots and engage with the community.
        </p>
    </div>
    <div class="container items-center max-w-7xl mx-auto mt-16 text-center">
        <div class="content-wrapper">
            <div id="youtube-placeholder" class="youtube cursor-pointer" data-id="Glu4n2mf49k">
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
        <a href="https://stripe.com/" class="px-2 py-1 rounded-lg bg-stripe">Stripe</a>
        <a href="https://jquery.com/" class="px-2 py-1 rounded-lg bg-jquery">jQuery</a>
        <a href="https://www.javascript.com/" class="px-2 py-1 rounded-lg bg-js">JavaScript</a>
        <a href="https://laravel.com/docs/9.x/billing" class="px-2 py-1 rounded-lg bg-laravel">Cashier</a>
        <a href="https://getbootstrap.com/" class="px-2 py-1 rounded-lg bg-bootstrap">Bootstrap CSS</a>
        <a href="https://www.openstreetmap.org/" class="px-2 py-1 rounded-lg bg-osm text-black">Open Street Map</a>
        <a href="https://openlayers.org/" class="px-2 py-1 rounded-lg bg-openlayers text-black">OpenLayers</a>
        <a href="https://nominatim.org/" class="px-2 py-1 rounded-lg bg-osm text-black">Nominatim</a>
        <a href="https://www.mysql.com/" class="px-2 py-1 rounded-lg bg-mysql">MySQL</a>
        <a href="https://www.docker.com/" class="px-2 py-1 rounded-lg bg-docker">Docker</a>
    </div>
</section>
<section class="w-full px-8 py-16 bg-gray-700 xl:px-0 tails-relative">
    <div class="flex flex-col max-w-6xl mx-auto md:flex-row">
        <div class="w-full pr-5 md:w-1/5 xl:pr-12">
            <h2 class="text-2xl font-bold leading-7 text-white">A responsive SaaS platform.<br></h2>
        </div>

        <div class="w-full mt-5 md:mt-0 md:w-4/5 md:pl-2">
            <p class="text-base font-normal leading-none text-gray-300 md:text-lg">
                Parkour Hub is built upon the foundation of a global spots map. Users can submit and search for spots on this map. A host of other features are available that connect with the spots.
            </p>
        </div>
    </div>
</section>
<section class="bg-gray-700 pb-20">
    <div class="container max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold tracking-tight text-center text-white">Features</h2>
        <p class="mt-2 text-lg text-center text-gray-300">Check out some of the features of Parkour Hub below.</p>
        <div class="grid grid-cols-4 gap-8 mt-10 sm:grid-cols-8 lg:grid-cols-12 sm:px-8 xl:px-0">
            <div class="relative flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 overflow-hidden transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/parkourhub/MapDemo.png') }}" alt="Parkour Hub Open Street Map Integration">
                <h3 class="text-xl font-medium text-white text-center">OpenStreetMap Integration<br></h3>
                <p class="text-base text-center text-gray-100">The foundation of Parkour Hub is a global map where users can view &amp; create spots.</p>
            </div>
            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/parkourhub/StripeDemo.png') }}" alt="Stripe Integration">
                <h4 class="text-xl font-medium text-white">Stripe Subscription<br></h4>
                <p class="text-base text-center text-gray-100">Unlock advanced functionality by signing up for the monthly subscription.</p>
            </div>
            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/parkourhub/DeleteDemo.png') }}" alt="Content Management">
                <h3 class="text-xl font-medium text-white">Content Management<br></h3>
                <p class="text-base text-center text-gray-100">Recover your deleted content for up to 30 days before it's automatically removed.</p>
            </div>
            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/parkourhub/PlannerDemo.png') }}" alt="Workout Planner">
                <h3 class="text-xl font-medium text-white">Workout Planner<br></h3>
                <p class="text-base text-center text-gray-100">An interactive calendar for planning and crossing off your workouts.</p>
            </div>
            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/parkourhub/EventDemo.png') }}" alt="Events">
                <h3 class="text-xl font-medium text-white">Events<br></h3>
                <p class="text-base text-center text-gray-100">Create or attend events to connect with the community.</p>
            </div>
            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/parkourhub/NotificationDemo.png') }}" alt="Notifications">
                <h3 class="text-xl font-medium text-white">Notifications<br></h3>
                <p class="text-base text-center text-gray-100">Receive notifications by email, on-site, both or none for a range of actions.</p>
            </div>
            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/parkourhub/VerifyDemo.png') }}" alt="Email Verification">
                <h3 class="text-xl font-medium text-white">Email Verification<br></h3>
                <p class="text-base text-center text-gray-100">Users receive an email upon registration with a link to verify before they can access the platform.</p>
            </div>
            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/parkourhub/NewsletterDemo.png') }}" alt="Newsletter Sign Up">
                <h3 class="text-xl font-medium text-white">ConvertKit Newsletter<br></h3>
                <p class="text-base text-center text-gray-100">Integrates a form and checkbox on registration to sign up for a ConvertKit newsletter.</p>
            </div>
            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/parkourhub/ChallengeDemo.png') }}" alt="Challenges">
                <h3 class="text-xl font-medium text-white">Challenges<br></h3>
                <p class="text-base text-center text-gray-100">Set a challenge at a spot to see if anyone can complete it.</p>
            </div>
        </div>
    </div>
</section>

@include('components.testimonial')

@endsection
