@extends('layouts.app')

@push('title')Contact | @endpush

@section('description')Get in touch to work together. | @endsection

@section('recaptcha')
    <script type="text/javascript">
        let captchaPassed = false;
        let captchaLoaded = false;
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

        function reCaptchaOnFocus() {
            if (captchaLoaded) {
                return true;
            }

            let head = document.getElementsByTagName('head')[0];
            let script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = 'https://www.google.com/recaptcha/api.js';
            head.appendChild(script);
            captchaLoaded = true;
        }
    </script>
@endsection

@section('content')
<div class="py-10 bg-gray-700 md:py-16">
    <div class="px-10 mx-auto max-w-7xl md:px-16">
        <div class="max-w-3xl mx-auto mb-10 md:mb-16">
            <p class="text-xs font-bold uppercase text-green-400">CONTACT ME</p>
            <h2 class="mt-1 text-2xl font-bold text-left text-white lg:text-3xl md:mt-2">Want to work together?</h2>
            <p class="max-w-screen-md mx-auto mt-4 text-left text-gray-300 md:text-lg md:mt-6">
                Fill out the form below or email <a class="text-green-300 hover:text-green-200" href="mailto:daniel@danportwine.co.uk">daniel@danportwine.co.uk</a> directly and I'll aim to get back to you within 48 hours.<br><br>Please provide as much information about your request as possible and a bit about yourself/your company so I can see if we'll be a good fit.<br></p>
        </div>
        @if(empty(Cookie::get('blocked')))
            <form id="contact-form" class="grid max-w-3xl gap-4 mx-auto sm:grid-cols-2" method="post" action="{{ route('contact-send') }}">
                <div class="">
                    <label for="first-name" class="inline-block mb-2 text-sm font-medium text-gray-300 sm:text-base">First name <sup class="text-red-500">*</sup></label>
                    <input name="first-name" id="first-name" class="w-full px-3 py-2 text-gray-800 transition duration-200 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300" maxlength="25" required>
                </div>
                <div class="">
                    <label for="last-name" class="inline-block mb-2 text-sm font-medium text-gray-300 sm:text-base">Last name</label>
                    <input name="last-name" id="last-name" class="w-full px-3 py-2 text-gray-800 transition duration-200 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300" maxlength="25">
                </div>
                <div class="sm:col-span-2">
                    <label for="company" class="inline-block mb-2 text-sm font-medium text-gray-300 sm:text-base">Company</label>
                    <input name="company" id="company" class="w-full px-3 py-2 text-gray-800 transition duration-200 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300" maxlength="50">
                </div>
                <div class="sm:col-span-2">
                    <label for="email" class="inline-block mb-2 text-sm font-medium text-gray-300 sm:text-base">Email <sup class="text-red-500">*</sup></label>
                    <input type="email" name="email" id="email" class="w-full px-3 py-2 text-gray-800 transition duration-200 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300" maxlength="150" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="subject" class="inline-block mb-2 text-sm font-medium text-gray-300 sm:text-base">Subject <sup class="text-red-500">*</sup></label>
                    <input name="subject" id="subject" class="w-full px-3 py-2 text-gray-800 transition duration-200 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300" maxlength="50" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="inline-block mb-2 text-sm font-medium text-gray-300 sm:text-base">Message <sup class="text-red-500">*</sup></label>
                    <textarea name="message" id="message" class="w-full h-64 px-3 py-2 text-gray-800 transition duration-200 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300" maxlength="5000" required></textarea>
                </div>
                <div class="flex flex-col items-left justify-between sm:col-span-2">
                    <button type="submit" id="contact-hidden-submit" class="hidden"></button>
                    <button type="submit" class="inline-block px-8 py-3 text-sm text-center text-black transition duration-200 rounded-full outline-none md:text-base bg-green-400 active:bg-green-400 hover:scale-105 ring-green-300 disabled:bg-green-300 g-recaptcha"
                            id="contact-submit"
                            data-callback="callbackThen"
                            data-sitekey="{{ config('recaptcha.api_site_key') }}"
                    >
                        Send Message
                    </button>
                </div>
            </form>
        @endif
        <p class="max-w-3xl mx-auto mt-5 text-xs text-gray-300">
            Please allow up to 48 hours for a response.
        </p>
    </div>
</div>

<x-testimonial />

<script>
    document.getElementById('contact-submit').addEventListener('click', checkRecaptcha);
    document.getElementById('first-name').addEventListener('focus', reCaptchaOnFocus);
    document.getElementById('last-name').addEventListener('focus', reCaptchaOnFocus);
    document.getElementById('company').addEventListener('focus', reCaptchaOnFocus);
    document.getElementById('email').addEventListener('focus', reCaptchaOnFocus);
    document.getElementById('subject').addEventListener('focus', reCaptchaOnFocus);
    document.getElementById('message').addEventListener('focus', reCaptchaOnFocus);
</script>
@endsection
