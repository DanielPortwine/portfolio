@extends('layouts.app')

@push('title')Monkey Chat Project | @endpush

@section('description')A PHP chat site I built for my A-level computer science project. | @endsection

@section('content')
<section class="px-2 pt-32 bg-gray-700 md:px-0">
    <div class="container items-center max-w-6xl px-5 mx-auto space-y-6 text-center">
        <h1 class="text-4xl font-extrabold tracking-tight text-left text-white sm:text-5xl md:text-6xl md:text-center">
            <span class="block">Monkey Chat</span>
        </h1>
        <p class="w-full mx-auto text-base text-left text-gray-300 md:max-w-md sm:text-lg lg:text-2xl md:max-w-3xl md:text-center">
            A chat site for children to keep up with their friends in a safe online environment. My A-level computer science project.
        </p>
    </div>
    <div class="container items-center max-w-7xl px-5 mx-auto mt-16 text-center">
        <div class="content-wrapper">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/iza00pYvVuo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</section>
<section class="mt-8 max-w-6xl mx-auto">
    <div class="flex flex-wrap justify-center gap-2 text-white">
        <a href="https://www.php.net/" class="px-2 py-1 rounded-lg bg-php">PHP</a>
        <a href="https://jquery.com/" class="px-2 py-1 rounded-lg bg-jquery">jQuery</a>
        <a href="https://www.javascript.com/" class="px-2 py-1 rounded-lg bg-js">JavaScript</a>
        <a href="https://www.mysql.com/" class="px-2 py-1 rounded-lg bg-mysql">MySQL</a>
    </div>
</section>
<section class="w-full px-8 py-16 bg-gray-700 xl:px-0 tails-relative">
    <div class="flex flex-col max-w-6xl mx-auto md:flex-row">
        <div class="w-full pr-5 md:w-1/5 xl:pr-12">
            <h3 class="text-2xl font-bold leading-7 text-white">A-level computer science project.<br></h3>
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
        <p class="mt-2 text-lg text-center text-gray-300">Check out some of the features of Monkey Chat below.</p>
        <div class="grid grid-cols-4 gap-8 mt-10 sm:grid-cols-8 lg:grid-cols-12 sm:px-8 xl:px-0">
            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/monkeychat/PrivateDemo.png') }}">
                <h4 class="text-xl font-medium text-white text-center">Private Chats<br></h4>
                <p class="text-base text-center text-gray-100">Users can create private chats and can invite only the people they want.</p>
            </div>
            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/monkeychat/ParentChildDemo.png') }}">
                <h4 class="text-xl font-medium text-white text-center">Parent/Child Accounts<br></h4>
                <p class="text-base text-center text-gray-100">Child accounts are created by a parent account.</p>
            </div>
            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/monkeychat/FriendDemo.png') }}">
                <h4 class="text-xl font-medium text-white text-center">Friends<br></h4>
                <p class="text-base text-center text-gray-100">Users can send and receive friend requests.</p>
            </div>
            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/monkeychat/ReportDemo.png') }}">
                <h4 class="text-xl font-medium text-white text-center">Reports & Banning<br></h4>
                <p class="text-base text-center text-gray-100">A child's report will first be seen by their parent then the parent can report to admins to take action.</p>
            </div>
            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/monkeychat/StickerDemo.png') }}">
                <h4 class="text-xl font-medium text-white text-center">Stickers<br></h4>
                <p class="text-base text-center text-gray-100">A selection of custom monkey stickers to express emotions over text.</p>
            </div>
            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 transition-shadow duration-200 bg-gradient-to-tr from-cyan-600 to-green-500 bg-top bg-cover shadow-xl hover:shadow-2xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <img src="{{ asset('media/projects/monkeychat/NewsDemo.png') }}">
                <h4 class="text-xl font-medium text-white text-center">News<br></h4>
                <p class="text-base text-center text-gray-100">Admins can post updates or news that everyone can see.</p>
            </div>

        </div>
    </div>
</section>
@endsection
