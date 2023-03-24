@extends('layouts.app')

@push('title')Fruit Machine Project | @endpush

@section('description')A PHP Fruit Machine with leaderboard, stats, power-ups and penalties. | @endsection

@section('content')
<x-project-header title="Fruit Machine">
    One of my first PHP projects, before learning Laravel. A fun fruit machine game with power-ups and penalties.
</x-project-header>

<div class="container items-center max-w-7xl px-5 mx-auto mt-16 text-center">
    <x-youtube-video id="cQ6dU-m06IA"></x-youtube-video>
</div>

<x-project-description title="A fun little project">
    This is one of my earliest web apps, before discovering Laravel so using raw PHP.
    The idea is that you click to spin. If you get any matches, you get XP. The more matches, the more XP you get.
    Once you run out of spins, you can't spin again.
</x-project-description>

<x-project-cta />

<x-project-features subtitle="Check out the key features available for your Shoot Hub below.">
    <x-showcase-card src="media/projects/fruitmachine/freeSpins.png" title="Free Spins every 6 hours">
        Every 6 hours, users can obtain 20 free spins by clicking the button.
    </x-showcase-card>
    <x-showcase-card src="media/projects/fruitmachine/powerups.png" title="Power-ups">
        Beer can be used to increase the XP gained from spins. Users can also receive free spins as spin items.
    </x-showcase-card>
    <x-showcase-card src="media/projects/fruitmachine/penalties.png" title="Penalties">
        If a bomb is in the spin items, no power-ups or XP are gained and the user loses some beer.
    </x-showcase-card>
    <x-showcase-card src="media/projects/fruitmachine/leaderboard.png" title="Leaderboard">
        Compare your results to others. Your score is based on an average to create a more level playing field.
    </x-showcase-card>
    <x-showcase-card src="media/projects/fruitmachine/stats.png" title="Stats">
        View your statistics; how many of each type of match you've spun, how much beer you've used, how many bombs you've spun.
    </x-showcase-card>
    <x-showcase-card src="media/projects/fruitmachine/admin.png" title="Admin Panel">
        As an admin user, you can pre-select the spin result and give yourself free spins and beer.
    </x-showcase-card>
</x-project-features>

<x-project-cta />

<x-testimonial />

@endsection
