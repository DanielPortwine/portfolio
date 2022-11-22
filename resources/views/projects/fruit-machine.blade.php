@extends('layouts.app')

@push('title')Fruit Machine Project | @endpush

@section('description')A PHP Fruit Machine with leaderboard, stats, power-ups and penalties. | @endsection

@section('content')
<section class="px-2 pt-32 bg-gray-700 md:px-0">
    <div class="container items-center max-w-6xl px-5 mx-auto space-y-6 text-center">
        <h1 class="text-4xl font-extrabold tracking-tight text-left text-white sm:text-5xl md:text-6xl md:text-center">
            <span class="block">Fruit Machine</span>
        </h1>
        <p class="w-full mx-auto text-base text-left text-gray-300 md:max-w-md sm:text-lg lg:text-2xl md:max-w-3xl md:text-center">
            One of my first PHP projects, before learning Laravel. A fun fruit machine game with power-ups and penalties.
        </p>
        <a href="https://github.com/DanielPortwine/Fruit-Machine" class="w-full mx-auto text-white hover:text-gray-200">View on GitHub</a>
    </div>
    <div class="container items-center max-w-7xl px-5 mx-auto mt-16 text-center">
        <div class="content-wrapper">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/cQ6dU-m06IA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</section>
<section class="mt-8 max-w-6xl mx-auto">
    <div class="flex flex-wrap justify-center gap-2 text-white">
        <a href="https://www.php.net/" class="px-2 py-1 rounded-lg bg-php">PHP</a>
        <a href="https://jquery.com/" class="px-2 py-1 rounded-lg bg-jquery">jQuery</a>
        <a href="https://www.javascript.com/" class="px-2 py-1 rounded-lg bg-js">JavaScript</a>
        <a href="https://getbootstrap.com/" class="px-2 py-1 rounded-lg bg-bootstrap">Bootstrap CSS</a>
        <a href="https://www.mysql.com/" class="px-2 py-1 rounded-lg bg-mysql">MySQL</a>
        <a href="https://www.docker.com/" class="px-2 py-1 rounded-lg bg-docker">Docker</a>
    </div>
</section>
<section class="w-full px-8 py-16 bg-gray-700 xl:px-0 tails-relative">
    <div class="flex flex-col max-w-6xl mx-auto md:flex-row">
        <div class="w-full pr-5 md:w-1/5 xl:pr-12">
            <h3 class="text-2xl font-bold leading-7 text-white">A fun little project.<br></h3>
        </div>
        <div class="w-full mt-5 md:mt-0 md:w-4/5 md:pl-2">
            <p class="text-base font-normal leading-none text-gray-300 md:text-lg">
                This is one of my earliest web apps, before discovering Laravel so using raw PHP. The idea is that you click to spin. If you get any matches, you get XP. The more matches, the more XP you get. Once you run out of spins, you can't spin again.<br>
            </p>
        </div>
    </div>
</section>
<section class="bg-gray-700 pb-20">
    <div class="container max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold tracking-tight text-center text-white">Features</h2>
        <p class="mt-2 text-lg text-center text-gray-300">Check out some of the features of the Fruit Machine below.</p>
        <div class="grid grid-cols-4 gap-8 mt-10 sm:grid-cols-8 lg:grid-cols-12 sm:px-8 xl:px-0">
            <div class="relative flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 overflow-hidden transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/fruitmachine/freeSpins.png') }}">
                <h4 class="text-xl font-medium text-white text-center">Free Spins every 6 hours<br></h4>
                <p class="text-base text-center text-gray-100">Every 6 hours, users can obtain 20 free spins by clicking the button.</p>
            </div>
            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/fruitmachine/powerups.png') }}">
                <h4 class="text-xl font-medium text-white">Power-ups<br></h4>
                <p class="text-base text-center text-gray-100">Beer can be used to increase the XP gained from spins. Users can also receive free spins as spin items.</p>
            </div>
            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/fruitmachine/penalties.png') }}">
                <h4 class="text-xl font-medium text-white">Penalties<br></h4>
                <p class="text-base text-center text-gray-100">If a bomb is in the spin items, no power-ups or XP are gained and the user loses some beer.</p>
            </div>
            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/fruitmachine/leaderboard.png') }}">
                <h4 class="text-xl font-medium text-white">Leaderboard<br></h4>
                <p class="text-base text-center text-gray-100">Compare your results to others. Your score is based on an average to create a more level playing field.</p>
            </div>
            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/fruitmachine/stats.png') }}">
                <h4 class="text-xl font-medium text-white">Stats<br></h4>
                <p class="text-base text-center text-gray-100">View your statistics; how many of each type of match you've spun, how much beer you've used, how many bombs you've spun.</p>
            </div>
            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/fruitmachine/admin.png') }}">
                <h4 class="text-xl font-medium text-white">Admin Panel<br></h4>
                <p class="text-base text-center text-gray-100">As an admin user, you can pre-select the spin result and give yourself free spins and beer.</p>
            </div>
        </div>
    </div>
</section>
@endsection
