<section class="text-gray-300">
    <div id="testimonial-carousel" class="carousel slide relative" data-bs-ride="carousel">
        <div class="carousel-inner relative w-full overflow-hidden">
            @foreach(config('testimonials') as $key => $testimonial)
                <div class="carousel-item relative float-left w-full @if($key === 0)active @endif">
                    <div class="px-10 py-12 mx-auto md:px-12 max-w-7xl">
                        <div class="w-full mx-auto text-center xl:w-1/2 lg:w-3/4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 mb-8 text-gray-400" viewBox="0 0 975.036 975.036"><path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path></svg>
                            <p class="text-base text-white leading-relaxed md:text-lg">{{ $testimonial['testimonial'] }}</p>
                            <span class="inline-block w-10 h-1 mt-8 mb-6 bg-green-400 rounded" data-primary="green-400"></span>
                            <h2 class="text-sm font-medium tracking-wider text-white uppercase title-font">{{ $testimonial['author'] }}</h2>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
