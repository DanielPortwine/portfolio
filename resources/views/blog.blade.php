@extends('layouts.app')

@push('title')Projects | @endpush

@section('description')View my previous projects and open source contributions. | @endsection

@section('content')
<section class="h-auto bg-gray-700 py-12 md:py-20">
    <div class="md:text-center max-w-7xl mx-auto xl:px-0 px-5">
        <p class="font-medium mb-4 sm:text-lg uppercase tracking-wide text-green-500">Blog<br></p>
        <h1 class="text-4xl font-extrabold tracking-normal text-white sm:text-5xl lg:text-7xl md:leading-none">Insights on Web App development<br></h1>
        <p class="max-w-none mx-auto mt-3 text-xl font-normal text-gray-300 sm:mt-5 sm:text-xl md:mt-5 lg:text-2xl md:max-w-4xl">Read about Web App principles and how they can help your business.<br></p>
    </div>
</section>
<section class="bg-gray-700">
    <div class="px-8 py-10 mx-auto lg:max-w-screen-xl sm:max-w-xl md:max-w-full sm:px-12 md:px-16 lg:py-20 sm:py-16">
        <div class="grid gap-x-8 gap-y-12 sm:gap-y-16 md:grid-cols-2 lg:grid-cols-3">
            @foreach(config('blog.posts') as $post)
                <div class="relative {{--p-4 bg-gray-600--}} {{--bg-gradient-to-br from-blue-700 to-green-500--}} {{--shadow-xl rounded-xl--}}">
                    <a href="{{ route('blog-view', $post['slug']) }}" class="block overflow-hidden group rounded-xl">
                        <img src="{{ asset($post['image']) }}" class="object-cover w-full h-56 sm:h-64" alt="">
                    </a>
                    <div class="mt-5">
                        <p class="uppercase font-semibold text-xs mb-2.5 text-green-500">{{ $post['date'] }}</p>
                        <a href="{{ route('blog-view', $post['slug']) }}" class="block mb-3">
                            <h2 class="text-2xl font-bold leading-5 text-white transition-colors duration-200 hover:text-gray-200">
                                {{ $post['title'] }}
                            </h2>
                        </a>
                        <p class="mb-4 text-gray-300">{{ $post['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@include('components.testimonial')

@endsection
