@extends('layouts.app')

@push('title')Thanks For Getting In Touch | @endpush

@section('description')Get in touch to work together. | @endsection

@section('content')
<div class="py-10 bg-gray-700 md:py-16">
    <div class="px-10 mx-auto max-w-7xl md:px-16">
        <div class="max-w-3xl mx-auto mb-10 md:mb-16">
            <p class="text-xs font-bold uppercase text-green-500">THANK YOU</p>
            <h2 class="mt-1 text-2xl font-bold text-left text-white lg:text-3xl md:mt-2">Thanks for getting in touch!</h2>
            <p class="max-w-screen-md mx-auto mt-4 text-left text-gray-300 md:text-lg md:mt-6">
                I will aim to get back to you within 48 hours.<br><br>
                If you don't hear from me within this time-frame, please follow up by contacting <a class="text-green-300 hover:text-green-200" href="mailto:daniel@danportwine.co.uk">daniel@danportwine.co.uk</a>.
            </p>
        </div>
    </div>
</div>

@include('components.testimonial')

@endsection
