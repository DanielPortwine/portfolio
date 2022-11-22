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
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Glu4n2mf49k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
        <a href="https://www.openstreetmap.org/" class="px-2 py-1 rounded-lg bg-osm">Open Street Map</a>
        <a href="https://openlayers.org/" class="px-2 py-1 rounded-lg bg-openlayers">OpenLayers</a>
        <a href="https://nominatim.org/" class="px-2 py-1 rounded-lg bg-osm">Nominatim</a>
        <a href="https://www.mysql.com/" class="px-2 py-1 rounded-lg bg-mysql">MySQL</a>
        <a href="https://www.docker.com/" class="px-2 py-1 rounded-lg bg-docker">Docker</a>
    </div>
</section>
<section class="w-full px-8 py-16 bg-gray-700 xl:px-0 tails-relative">
    <div class="flex flex-col max-w-6xl mx-auto md:flex-row">
        <div class="w-full pr-5 md:w-1/5 xl:pr-12">
            <h3 class="text-2xl font-bold leading-7 text-white">A valuable learning experience.<br></h3>
        </div>

        <div class="w-full mt-5 md:mt-0 md:w-4/5 md:pl-2">
            <p class="text-base font-normal leading-none text-gray-300 md:text-lg">
                Parkour Hub is a side project I worked on to improve my Laravel knowledge. It also taught me a lot about managing a complex project from deciding which features to work on first to testing and keeping on top of bugs.<br></p>
        </div>
    </div>
</section>
<section class="bg-gray-700 pb-20">
    <div class="container max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold tracking-tight text-center text-white">Features</h2>
        <p class="mt-2 text-lg text-center text-gray-300">Check out some of the features of Parkour Hub below.</p>
        <div class="grid grid-cols-4 gap-8 mt-10 sm:grid-cols-8 lg:grid-cols-12 sm:px-8 xl:px-0">
            <div class="relative flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 overflow-hidden transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/parkourhub/MapDemo.png') }}">
                <h4 class="text-xl font-medium text-white text-center">OpenStreetMap Integration<br></h4>
                <p class="text-base text-center text-gray-100">The foundation of Parkour Hub is a global map where users can view &amp; create spots.</p>
            </div>
            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/parkourhub/StripeDemo.png') }}">
                <h4 class="text-xl font-medium text-white">Stripe Subscription<br></h4>
                <p class="text-base text-center text-gray-100">Unlock advanced functionality by signing up for the monthly subscription.</p>
            </div>
            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/parkourhub/DeleteDemo.png') }}">
                <h4 class="text-xl font-medium text-white">Content Management<br></h4>
                <p class="text-base text-center text-gray-100">Recover your deleted content for up to 30 days before it's automatically removed.</p>
            </div>
            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/parkourhub/PlannerDemo.png') }}">
                <h4 class="text-xl font-medium text-white">Workout Planner<br></h4>
                <p class="text-base text-center text-gray-100">An interactive calendar for planning and crossing off your workouts.</p>
            </div>
            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/parkourhub/EventDemo.png') }}">
                <h4 class="text-xl font-medium text-white">Events<br></h4>
                <p class="text-base text-center text-gray-100">Create or attend events to connect with the community.</p>
            </div>
            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/parkourhub/NotificationDemo.png') }}">
                <h4 class="text-xl font-medium text-white">Notifications<br></h4>
                <p class="text-base text-center text-gray-100">Receive notifications by email, on-site, both or none for a range of actions.</p>
            </div>
            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/parkourhub/VerifyDemo.png') }}">
                <h4 class="text-xl font-medium text-white">Email Verification<br></h4>
                <p class="text-base text-center text-gray-100">Users receive an email upon registration with a link to verify before they can access the platform.</p>
            </div>
            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/parkourhub/NewsletterDemo.png') }}">
                <h4 class="text-xl font-medium text-white">ConvertKit Newsletter<br></h4>
                <p class="text-base text-center text-gray-100">Integrates a form and checkbox on registration to sign up for a ConvertKit newsletter.</p>
            </div>
            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/parkourhub/ChallengeDemo.png') }}">
                <h4 class="text-xl font-medium text-white">Challenges<br></h4>
                <p class="text-base text-center text-gray-100">Set a challenge at a spot to see if anyone can complete it.</p>
            </div>
        </div>
    </div>
</section>
@endsection
