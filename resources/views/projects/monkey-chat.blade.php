@extends('layouts.app')

@push('title')Monkey Chat Project | @endpush

@section('description')A PHP chat site I built for my A-level computer science project. | @endsection

@section('content')
<x-project-header title="Monkey Chat">
    A chat site for kids to keep up with their friends in a safe online environment. My A-level computer science project.
</x-project-header>

<div class="container items-center max-w-7xl px-5 mx-auto mt-16 text-center">
    <x-youtube-video id="iza00pYvVuo"></x-youtube-video>
</div>

<x-project-description title="A-level computer science project.">
    Monkey Chat is the product of my A-level computer science project.
    It is a chat site for kids to stay connected with their friends in a safe online environment.
    Child accounts have to be created by a Parent account and there are features to respond to inappropriate messages.
</x-project-description>

<x-project-cta />

<x-project-features subtitle="Check out some of the features of Monkey Chat below.">
    <x-showcase-card src="media/projects/monkeychat/PrivateDemo.png" title="Private Chats">
        Users can create private chats and can invite only the people they want.
    </x-showcase-card>
    <x-showcase-card src="media/projects/monkeychat/ParentChildDemo.png" title="Parent and Child Accounts">
        Child accounts are created by a parent account.
    </x-showcase-card>
    <x-showcase-card src="media/projects/monkeychat/FriendDemo.png" title="Friends">
        Users can send and receive friend requests.
    </x-showcase-card>
    <x-showcase-card src="media/projects/monkeychat/ReportDemo.png" title="Reports and Banning">
        A child's report will first be seen by their parent then the parent can report to admins to take action.
    </x-showcase-card>
    <x-showcase-card src="media/projects/monkeychat/StickerDemo.png" title="Stickers">
        A selection of custom monkey stickers to express emotions over text.
    </x-showcase-card>
    <x-showcase-card src="media/projects/monkeychat/NewsDemo.png" title="News">
        Admins can post updates or news that everyone can see.
    </x-showcase-card>
</x-project-features>

<x-project-cta />

<x-testimonial />

@endsection
