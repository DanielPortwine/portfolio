<section class="flex items-center justify-center py-16 bg-green-400">
    <div class="px-4 lg:px-16 bg-green-400 mx-auto max-w-7xl">
        <div class="container flex flex-col items-start mx-auto lg:items-center">
            <p class="relative flex items-start justify-start w-full text-lg font-bold tracking-wider uppercase lg:justify-center lg:items-center text-green-800" data-primary="purple-500">
                {{ $subtitle }}
            </p>
            <h2 class="relative flex items-start justify-start w-full max-w-6xl mb-12 text-3xl lg:text-4xl text-black font-bold lg:justify-center">
                {{ $slot->isEmpty() ? 'Ready to bring your dream web app into reality?' : $slot }}
            </h2>
            <a href="{{ route('contact') }}" class="flex items-center justify-center w-full px-4 py-2 transition duration-200 text-base font-medium leading-6 text-black bg-transparent border-2 border-black rounded-full shadow-sm md:w-auto md:inline-flex hover:scale-105 focus:outline-none" data-primary="green-400" data-rounded="rounded-full">
                Get Started
            </a>
        </div>
    </div>
</section>
