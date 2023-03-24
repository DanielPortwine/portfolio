@extends('layouts.app')

@push('title')Social Platform | @endpush

@section('description')A Laravel and Vue Single Page Application for sharing posts, inspired by Twitter. | @endsection

@section('content')
<x-project-header title="Social" github="https://github.com/DanielPortwine/Social">
    A Twitter-inspired social platform Single Page Application built with Laravel & Vue.
</x-project-header>

<div class="container items-center max-w-7xl px-5 mx-auto mt-16 text-center">
    <x-youtube-video id="EjgSXJ2oQ_0"></x-youtube-video>
</div>

<x-project-description title="Single Page Application with Vue">
    Social was a project I started to learn Vue.js and the Single Page Application methodology.
    The basic concept is that users can register, login and then create posts. They can then comment on their own or other users' posts.
    The lists of posts use infinite scroll for a better user experience.
    Users can click on a user's name to see more information about that user as well as a list of that users' posts.
    There is also a side tab that lists the most followed users.
</x-project-description>

<x-project-cta />

<x-project-features subtitle="Check out some of the features of Social below.">
    <x-showcase-card src="media/projects/social/2FADemo.png" title="2FA">
        Setup 2-factor authentication with an authenticator app for your account.
    </x-showcase-card>
    <x-showcase-card src="media/projects/social/ScrollDemo.png" title="Infinite Scroll">
        Content is loaded as you scroll instead of having pagination.
    </x-showcase-card>
    <x-showcase-card src="media/projects/social/FollowDemo.png" title="Follow & Unfollow">
        Follow other users and see their posts in your feed.
    </x-showcase-card>
</x-project-features>

<x-project-cta />

<x-testimonial />

@endsection
