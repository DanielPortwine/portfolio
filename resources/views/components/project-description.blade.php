<section class="py-16 bg-gray-700">
    <div class="container items-center max-w-7xl px-4 mx-auto sm:px-20 md:px-32 lg:px-16">
        <div class="flex flex-wrap items-center -mx-3">
            <div class="order-1 w-full px-3 lg:order-0">
                <div class="w-full tails-relative">
                    <h2 class="mb-4 text-3xl font-bold text-white leading-tight tracking-tight sm:text-4xl font-heading">
                        {{ $title }}
                    </h2>
                    <p class="mb-4 font-medium tracking-tight text-gray-300">
                        {{ $slot }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
