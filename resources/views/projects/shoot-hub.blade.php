@extends('layouts.app')

@push('title')Shoot Hub Project | @endpush

@section('description')An intranet for shooting clubs to streamline their administrative tasks and increase member engagement. | @endsection

@section('content')
<section class="px-2 pt-32 bg-gray-700 md:px-0">
    <div class="container items-center max-w-6xl px-5 mx-auto space-y-6 text-center">
        <h1 class="text-4xl font-extrabold tracking-tight text-left text-white sm:text-5xl md:text-6xl md:text-center">
            <span class="block">Shoot Hub</span>
        </h1>
        <p class="w-full mx-auto text-base text-left text-gray-300 md:max-w-md sm:text-lg lg:text-2xl md:max-w-3xl md:text-center">
            An intranet for shooting clubs to streamline their administrative tasks and increase member engagement.
        </p>
{{--        <a href="https://github.com/DanielPortwine/Social" class="w-full mx-auto text-white hover:text-gray-200">View on GitHub</a>--}}
    </div>
    <div class="container items-center max-w-7xl px-5 mx-auto mt-16 text-center">
        <div class="content-wrapper">
            <div id="youtube-placeholder" class="youtube cursor-pointer" data-id="MwML_f-fHh4">
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
        <a href="https://laravel-livewire.com/" class="px-2 py-1 rounded-lg bg-livewire">Livewire</a>
        <a href="https://tailwindcss.com/" class="px-2 py-1 rounded-lg bg-tailwind">Tailwind CSS</a>
        <a href="https://filamentphp.com/" class="px-2 py-1 rounded-lg bg-filament">Filament</a>
        <a href="https://laravel.com/docs/9.x/sanctum" class="px-2 py-1 rounded-lg bg-laravel">Sanctum</a>
        <a href="https://laravel.com/docs/9.x/fortify" class="px-2 py-1 rounded-lg bg-laravel">Fortify</a>
        <a href="https://www.mysql.com/" class="px-2 py-1 rounded-lg bg-mysql">MySQL</a>
        <a href="https://www.docker.com/" class="px-2 py-1 rounded-lg bg-docker">Docker</a>
    </div>
</section>
<section class="w-full px-8 py-16 bg-gray-700 xl:px-0 tails-relative">
    <div class="flex flex-col max-w-6xl mx-auto md:flex-row">
        <div class="w-full pr-5 md:w-1/5 xl:pr-12">
            <h2 class="text-2xl font-bold leading-7 text-white">Streamline your Shooting Club<br></h2>
        </div>

        <div class="w-full mt-5 md:mt-0 md:w-4/5 md:pl-2">
            <p class="text-base font-normal leading-none text-gray-300 md:text-lg">
                Are you tired of the administrative headaches that come with running a shooting club?
                Look no further than Shoot Hub, the innovative web app platform designed specifically for shooting clubs.<br><br>

                Shoot Hub is a web app platform that can be customised to meet your club's exact needs. Need a feature that doesn't already exist?
                It can be built for you. Want a feature to work in a different way? That's taken care of.
                I'll work closely with you to understand your club's needs and tailor the app to your exact specifications.<br><br>

                With Shoot Hub, you can streamline your membership application process and reduce errors with its easy-to-use online application system.
                Plus, the daily QR code generator allows members to check in digitally, saving time and hassle.<br><br>

                But that's not all. Shoot Hub also features a competition system for scoring practical shoots and an interactive
                calendar to keep members informed about upcoming events.<br><br>

                And for club owners, Shoot Hub offers a powerful admin section that provides key metrics and insights into your club's performance.
                Say goodbye to the days of manual data entry and tedious administrative work - with Shoot Hub,
                running a shooting club has never been easier.<br><br>

                Ready to experience the benefits of a custom-built web app? <a href="{{ route('contact') }}" class="text-green-300 hover:text-green-200">Get in touch now</a>.
            </p>
        </div>
    </div>
</section>
<section class="bg-gray-700 pb-20">
    <div class="container max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold tracking-tight text-center text-white">Features</h2>
        <p class="mt-2 text-lg text-center text-gray-300">Check out some features of Shoot Hub below.</p>
        <div class="grid grid-cols-4 gap-8 mt-10 sm:grid-cols-8 lg:grid-cols-12 sm:px-8 xl:px-0">
            <div class="relative flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 overflow-hidden transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/shoothub/ApplicationDemo.png') }}" alt="Membership Application">
                <h3 class="text-xl font-medium text-white text-center">Membership Application<br></h3>
                <p class="text-base text-center text-gray-100">Speed up membership applications by having applicants apply & pay directly on the intranet.</p>
            </div>
            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/shoothub/CheckInDemo.png') }}" alt="Check-ins">
                <h3 class="text-xl font-medium text-white">Quick Check-in<br></h3>
                <p class="text-base text-center text-gray-100">Speed up range check-ins by allowing users to scan a QR code. These check-ins go straight into the database, bypassing paper forms.</p>
            </div>
            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/shoothub/PackagesDemo.png') }}" alt="Automated Renewals">
                <h3 class="text-xl font-medium text-white">Automated Renewals<br></h3>
                <p class="text-base text-center text-gray-100">Have the web app automatically send membership renewal reminders with the correct pro-rata prices.</p>
            </div>
            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/shoothub/CalendarDemo.png') }}" alt="Events Calendar">
                <h3 class="text-xl font-medium text-white">Events Calendar<br></h3>
                <p class="text-base text-center text-gray-100">Showcase upcoming club events on the calendar to keep members informed.</p>
            </div>
            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/shoothub/VisitsDemo.png') }}" alt="Range Visits">
                <h3 class="text-xl font-medium text-white">Range Visits<br></h3>
                <p class="text-base text-center text-gray-100">Users can share a range visit that contains images and videos as well as their targets.</p>
            </div>
            <div class="relative flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 overflow-hidden transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/shoothub/CompetitionsDemo.png') }}" alt="Competitions">
                <h3 class="text-xl font-medium text-white text-center">Competitions<br></h3>
                <p class="text-base text-center text-gray-100">Score your competitions directly on your intranet.</p>
            </div>
            <div class="flex flex-col items-center justify-between col-span-4 col-start-3 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/shoothub/AdminDemo.png') }}" alt="Admin">
                <h3 class="text-xl font-medium text-white">Admin<br></h3>
                <p class="text-base text-center text-gray-100">Manage important club data and view key metrics to help your club perform at its best.</p>
            </div>
            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/shoothub/FacebookDemo.png') }}" alt="Facebook Login">
                <h3 class="text-xl font-medium text-white">Facebook Login<br></h3>
                <p class="text-base text-center text-gray-100">Users can connect their Facebook account to speed up login.</p>
            </div>
        </div>
    </div>
</section>

@include('components.testimonial')

@endsection
