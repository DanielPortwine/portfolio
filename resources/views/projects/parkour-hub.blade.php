@extends('layouts.app')

@push('title')Parkour Hub | @endpush

@section('description')A Laravel SaaS platform for parkour athletes to share spots and engage with the community. | @endsection

@section('content')
<x-project-header title="Parkour Hub">
    A SaaS platform for parkour athletes to share their spots and engage with the community.
</x-project-header>

<div class="container items-center max-w-7xl px-5 mx-auto mt-16 text-center">
    <x-youtube-video id="Glu4n2mf49k"></x-youtube-video>
</div>

<x-project-description title="A parkour SaaS platform">
    Parkour Hub is built upon the foundation of a global spots map.
    Users can submit and search for spots on this map.
    A host of other features are available that connect with the spots.
</x-project-description>

<x-project-cta />

<x-project-features subtitle="Check out the key features available for your Shoot Hub below.">
    <x-showcase-card src="media/projects/parkourhub/MapDemo.png" title="OpenStreetMap Integration">
        The foundation of Parkour Hub is a global map where users can view & create spots.
    </x-showcase-card>
    <x-showcase-card src="media/projects/parkourhub/StripeDemo.png" title="Stripe Subscription">
        Unlock advanced functionality by signing up for the monthly subscription.
    </x-showcase-card>
    <x-showcase-card src="media/projects/parkourhub/DeleteDemo.png" title="Content Management">
        Recover your deleted content for up to 30 days before it's automatically removed.
    </x-showcase-card>
    <x-showcase-card src="media/projects/parkourhub/PlannerDemo.png" title="Workout Planner">
        An interactive calendar for planning and crossing off your workouts.
    </x-showcase-card>
    <x-showcase-card src="media/projects/parkourhub/EventDemo.png" title="Events">
        Create or attend events to connect with the community.
    </x-showcase-card>
    <x-showcase-card src="media/projects/parkourhub/NotificationDemo.png" title="Notifications">
        Receive notifications by email, on-site, both or none for a range of actions.
    </x-showcase-card>
    <x-showcase-card src="media/projects/parkourhub/VerifyDemo.png" title="Email Verification">
        Users receive an email upon registration with a link to verify before they can access the platform.
    </x-showcase-card>
    <x-showcase-card src="media/projects/parkourhub/NewsletterDemo.png" title="ConvertKit Newsletter">
        Integrates a form and checkbox on registration to sign up for a ConvertKit newsletter.
    </x-showcase-card>
    <x-showcase-card src="media/projects/parkourhub/ChallengeDemo.png" title="Challenges">
        Set a challenge at a spot to see if anyone can complete it.
    </x-showcase-card>
</x-project-features>

<x-project-cta />

<x-testimonial />

@endsection
