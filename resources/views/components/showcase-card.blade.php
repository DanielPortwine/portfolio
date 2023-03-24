<div class="relative flex flex-col items-top col-span-4 overflow-hidden transition duration-200 bg-gray-600 bg-top bg-cover shadow-xl hover:shadow-2xl hover:scale-105 sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
    <img src="{{ asset($src) }}" alt="Membership Application">
    <div class="p-6 mt-0 text-center">
        <h3 class="mb-4 text-xl font-medium text-white text-center">{{ $title }}</h3>
        <p class="text-base text-center text-gray-100">{{ $slot }}</p>
    </div>
</div>
