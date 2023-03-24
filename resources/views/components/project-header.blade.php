<section class="px-2 pt-16 bg-gray-700 md:px-0">
    <div class="container items-center max-w-6xl px-5 mx-auto space-y-6 text-center">
        <h1 class="text-4xl font-extrabold tracking-tight text-left text-white sm:text-5xl md:text-6xl md:text-center">
            <span class="block">{{ $title }}</span>
        </h1>
        <p class="w-full mx-auto text-base text-left text-gray-300 md:max-w-md sm:text-lg lg:text-2xl md:max-w-3xl md:text-center">
            {{ $slot }}
        </p>
        @if($github)
            <a href="{{ $github }}" class="w-full mx-auto text-white hover:text-gray-200">View on GitHub</a>
        @endif
    </div>
</section>
