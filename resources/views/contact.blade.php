@extends('layouts.app')

@push('title')Contact | @endpush

@section('description')Get in touch to work together. | @endsection

@section('recaptcha')
    <script type="text/javascript">
        let captchaPassed = false;
        function callbackThen() {
            captchaPassed = true;
            setTimeout(clickSubmit, 100);
        }

        function callbackExpired() {
            captchaPassed = false;
        }

        function checkRecaptcha() {
            if (captchaPassed) {
                setTimeout(clickSubmit, 100);
            }
        }

        function clickSubmit() {
            document.getElementById('contact-hidden-submit').click();
        }
    </script>

    {!! htmlScriptTagJsApi([
        'action' => 'contact',
        'callback_then' => 'callbackThen',
    ]) !!}
@endsection

@section('content')
@if(!empty(app('request')->get('success')))
    <div class="bg-green-300 py-4 px-8 mx-auto">
        <p class="text-green-900">{{ app('request')->get('success') }}</p>
    </div>
@endif
@if(!empty(session('errors')))
    <div class="bg-red-300 py-4 px-8 mx-auto text-red-900">
        <ul>
            @foreach(json_decode(session('errors')) as $error)
                <li>{{ $error[0] }}</li>
            @endforeach
        </ul>
    </div>
@endif
<section class="w-full px-8 pt-20 pb-16 bg-gray-700 xl:px-0">
    <div class="flex flex-col max-w-6xl mx-auto">
        <h3 class="text-4xl font-extrabold leading-none sm:text-5xl md:text-6xl lg:leading-7 text-white">Get in touch<br></h3>
        <div class="grid grid-cols-6 gap-5 mt-8 md:grid-cols-12 md:gap-10 lg:mt-12">
            <p class="col-span-6 text-base font-normal text-gray-200 lg:leading-8 xl:leading-8 md:text-xl">Do you have the next ground-breaking idea but don't have the technical knowledge or time to bring it to life?<br>Or perhaps you've already got a Laravel app but it needs a bit of TLC.<br></p>
            <p class="col-span-6 text-base font-normal text-gray-200 lg:leading-8 xl:leading-9 md:text-xl">That's where I come in. I can get your genius idea from your brain to your customers and I can breathe new life into an aging app. <br></p>
        </div>
    </div>
</section>
<div class="py-10 bg-gray-700 md:py-16">
    <div class="px-10 mx-auto max-w-7xl md:px-16">
        <div class="max-w-3xl mx-auto mb-10 md:mb-16">
            <p class="text-xs font-bold uppercase text-green-500">CONTACT ME</p>
            <h2 class="mt-1 text-2xl font-bold text-left text-white lg:text-3xl md:mt-2">Want to work together?</h2>
            <p class="max-w-screen-md mx-auto mt-4 text-left text-gray-300 md:text-lg md:mt-6">
                Fill out the form below or email <a class="text-green-300 hover:text-green-200" href="mailto:daniel@danportwine.co.uk">daniel@danportwine.co.uk</a> directly and I'll aim to get back to you within 48 hours.<br><br>Please provide as much information about your request as possible and a bit about yourself/your company so I can see if we'll be a good fit.<br></p>
        </div>
        <form id="contact-form" class="grid max-w-3xl gap-4 mx-auto sm:grid-cols-2" method="post" action="{{ route('contact-send') }}">
            <div class="">
                <label for="first-name" class="inline-block mb-2 text-sm font-medium text-gray-300 sm:text-base">First name <sup class="text-red-500">*</sup></label>
                <input name="first-name" id="first-name" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300" maxlength="25" required>
            </div>
            <div class="">
                <label for="last-name" class="inline-block mb-2 text-sm font-medium text-gray-300 sm:text-base">Last name</label>
                <input name="last-name" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300" maxlength="25">
            </div>
            <div class="sm:col-span-2">
                <label for="company" class="inline-block mb-2 text-sm font-medium text-gray-300 sm:text-base">Company</label>
                <input name="company" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300" maxlength="50">
            </div>
            <div class="sm:col-span-2">
                <label for="email" class="inline-block mb-2 text-sm font-medium text-gray-300 sm:text-base">Email <sup class="text-red-500">*</sup></label>
                <input type="email" name="email" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300" maxlength="150" required>
            </div>
            <div class="sm:col-span-2">
                <label for="subject" class="inline-block mb-2 text-sm font-medium text-gray-300 sm:text-base">Subject <sup class="text-red-500">*</sup></label>
                <input name="subject" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300" maxlength="50" required>
            </div>
            <div class="sm:col-span-2">
                <label for="message" class="inline-block mb-2 text-sm font-medium text-gray-300 sm:text-base">Message <sup class="text-red-500">*</sup></label>
                <textarea name="message" class="w-full h-64 px-3 py-2 text-gray-800 transition duration-100 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300" maxlength="5000" required></textarea>
            </div>
            <div class="flex flex-col items-left justify-between sm:col-span-2">
                <button type="submit" id="contact-hidden-submit" class=""></button>
                <button type="submit" class="inline-block px-8 py-3 text-sm font-semibold text-center text-white transition duration-100 rounded-md outline-none md:text-base bg-green-600 active:bg-green-700 hover:bg-green-500 ring-green-300 disabled:bg-green-300 g-recaptcha"
                        id="contact-submit"
                        data-callback="callbackThen"
                        data-sitekey="{{ config('recaptcha.api_site_key') }}"
                >
                    Send Message
                </button>
            </div>
        </form>
        <p class="max-w-3xl mx-auto mt-5 text-xs text-gray-400">
            Please allow up to 48 hours for a response.
        </p>
    </div>
</div>

@include('components.testimonial')

<script>
    document.getElementById('contact-submit').addEventListener('click', checkRecaptcha);
</script>
@endsection
