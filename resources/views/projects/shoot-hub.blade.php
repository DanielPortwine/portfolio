@extends('layouts.app')

@push('title')Shoot Hub | @endpush

@section('description')A shooting club intranet designed to streamline administration and elevate member engagement. | @endsection

@section('content')
<x-project-header title="Shoot Hub">
    A shooting club intranet designed to streamline administration and elevate member engagement.
</x-project-header>

<div class="container items-center max-w-7xl px-5 mx-auto mt-16 text-center">
    <x-youtube-video id="1SEY44CRNR8"></x-youtube-video>
</div>

<x-project-description title="Streamline Your Shooting Club">
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
    running a shooting club has never been easier.
</x-project-description>

<x-project-cta subtitle="Do you run a shooting club?">
    Ready to launch your club into the digital age? 🚀
</x-project-cta>

<x-project-features subtitle="Check out the key features available for your Shoot Hub below.">
    <x-showcase-card src="media/projects/shoothub/ApplicationDemo.png" title="Membership Application">
        Streamline membership applications with easy online processing and direct payments.
    </x-showcase-card>
    <x-showcase-card src="media/projects/shoothub/CheckInDemo.png" title="Quick Check-in">
        Accelerate range check-ins with seamless QR code scanning, skipping paper forms.
    </x-showcase-card>
    <x-showcase-card src="media/projects/shoothub/PackagesDemo.png" title="Automated Renewals">
        Keep your members engaged with auto-generated renewal reminders and pro-rata pricing.
    </x-showcase-card>
    <x-showcase-card src="media/projects/shoothub/FirearmsDemo.png" title="Firearms Tracking">
        Allow members to track their firearms and select them at check-in.
    </x-showcase-card>
    <x-showcase-card src="media/projects/shoothub/ProfileDemo.png" title="Member Profile">
        Empower your members with personalised insights through an easy-to-use dashboard.
    </x-showcase-card>
    <x-showcase-card src="media/projects/shoothub/CalendarDemo.png" title="Events Calendar">
        Keep members in the loop with an up-to-date calendar featuring club events.
    </x-showcase-card>
    <x-showcase-card src="media/projects/shoothub/VisitsDemo.png" title="Range Visits">
        Encourage members to share their range experiences, complete with images, videos, and targets.
    </x-showcase-card>
    <x-showcase-card src="media/projects/shoothub/CompetitionsDemo.png" title="Competitions">
        Simplify competition management with an integrated scoring system.
    </x-showcase-card>
    <x-showcase-card src="media/projects/shoothub/ProfileDemo.png" title="Awards">
        Boost engagement by rewarding members for their achievements.
    </x-showcase-card>
    <x-showcase-card src="media/projects/shoothub/AdminDemo.png" title="Admin">
        Optimise club performance with crucial data and key metrics right at your fingertips.
    </x-showcase-card>
    <x-showcase-card src="media/projects/shoothub/GuestDemo.png" title="Guest Days">
        Effortlessly monitor guest attendance with seamless tracking capabilities.
    </x-showcase-card>
    <x-showcase-card src="media/projects/shoothub/FacebookDemo.png" title="Login With Facebook">
        Speed up login by connecting your Facebook account.
    </x-showcase-card>
</x-project-features>
<x-project-cta subtitle="Do you run a shooting club?">
    Ready to launch your club into the digital age? 🚀
</x-project-cta>

<x-testimonial />

@endsection
