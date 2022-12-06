@extends('layouts.app')

@push('title')About | @endpush

@section('description')Learn more about my Web Development journey. | @endsection

@section('content')
<section class="relative w-full bg-gray-700">
    <div class="max-w-2xl lg:max-w-7xl px-10 xl:px-8 mx-auto items-center flex lg:flex-row flex-col py-10 sm:py-20">
        <div class="w-full sm:w-3/4 lg:w-1/2 lg:mt-0 mb-8">
            <img src="{{ asset('media/profile.jpg') }}" class="rounded-full" alt="Headshot of me">
        </div>
        <div class="w-full lg:w-1/2">
            <h1 class="text-4xl font-extrabold text-white tracking-tight sm:text-5xl">So who is Daniel Portwine?<br></h1>
            <p class="mt-8 text-xl text-gray-300 tails-relative">
                Learn about my web development journey by reading the content below.
            </p>
        </div>
    </div>
</section>
<section class="bg-gray-700">
    <div class="flex flex-col px-8 mx-auto space-y-12 max-w-7xl xl:px-12">
        <div class="relative">
            <h2 class="w-full text-3xl text-white font-bold text-center sm:text-4xl md:text-5xl">How it all started<br></h2>
            <p class="w-full py-8 mx-auto -mt-2 text-lg text-center text-gray-300 intro sm:max-w-3xl">For as long as I can remember, I have been interested in computers and technology. My interest in Web Development, specifically, started with my A-level computer science project. Read on to hear the whole story.<br></p>
        </div>
        <div class="flex flex-col mb-8 animated fadeIn sm:flex-row">
            <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12 sm:order-last">
                <img class="rounded-lg shadow-xl" src="{{ asset('media/projects/monkeychat/monkeychat.png') }}" alt="Monkey Chat project" data-rounded="rounded-lg" data-rounded-max="rounded-full">
            </div>
            <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-7/12 sm:pr-16">
                <p class="mb-2 text-sm font-semibold leading-none text-left uppercase text-green-500" data-primary="indigo-600">A-level Computer Science Project<br></p>
                <h3 class="mt-2 text-2xl sm:text-left md:text-4xl text-white">PHP Chat Site<br></h3>
                <p class="mt-5 text-lg text-gray-300 text md:text-left">For my A-level computer science project, I built a chat site for kids to keep up with their friends in a safe online environment. This taught me a lot about how web apps function and PHP in particular.</p>
            </div>
        </div>
        <div class="flex flex-col mb-8 animated fadeIn sm:flex-row">
            <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12">
                <img class="rounded-lg shadow-xl" src="{{ asset('media/visualsoft.png') }}" alt="Visualsoft logo" data-rounded="rounded-lg" data-rounded-max="rounded-full">
            </div>
            <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-7/12 sm:pl-16">
                <p class="mb-2 text-sm font-semibold leading-none text-left uppercase text-green-500" data-primary="indigo-600">Landing a Job at Visualsoft<br></p>
                <h3 class="mt-2 text-2xl sm:text-left md:text-4xl text-white">A Job Straight After A-levels<br></h3>
                <p class="mt-5 text-lg text-gray-300 text md:text-left">The skills I learned during my A-level project enabled me to land a job as a PHP Developer at <a class="text-green-300 hover:text-green-200" href="https://www.visualsoft.co.uk/" target="_blank">Visualsoft</a> straight after completing my A-levels. I spent a few months going around their dev departments, gaining valuable insights and experience before settling in DevOps as a DevOps Engineer. I have been in this role for just over 4 years now, working on a wide range of projects, and I continue to learn new things and expand my skillset.<br></p>
            </div>
        </div>
        <div class="flex flex-col mb-8 animated fadeIn sm:flex-row">
            <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12 sm:order-last">
                <img class="rounded-lg shadow-xl" src="{{ asset('media/handshake.jpg') }}" alt="Handshake" data-rounded="rounded-lg" data-rounded-max="rounded-full">
            </div>
            <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-7/12 sm:pr-16">
                <p class="mb-2 text-sm font-semibold leading-none text-left uppercase text-green-500" data-primary="indigo-600">Going Freelance<br></p>
                <h3 class="mt-2 text-2xl sm:text-left md:text-4xl text-white">Taking My Skills Further<br></h3>
                <p class="mt-5 text-lg text-gray-300 text md:text-left">With a wealth of experience under my belt, I'm now looking to take on some extra work as a freelancer to learn more and help more people. If this is something you're interested in, <a class="text-green-300 hover:text-green-200" href="{{ route('contact') }}">get in touch</a>.<br></p>
            </div>
        </div>
    </div>
</section>

@include('components.testimonial')

@endsection
