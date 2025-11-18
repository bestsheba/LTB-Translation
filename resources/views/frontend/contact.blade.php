@extends('frontend.layouts.frontend')
@section('title', __('messages.contact_page_title'))
@section('content')
    <div class="relative py-12 sm:py-16 lg:py-20 mt-20 bg-indigo-600 mb-8">
        <div class="absolute inset-0 bg-gradient-to-r from-indigo-800 to-indigo-600 opacity-90"></div>
        <div class="relative mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold tracking-tight text-white text-center">
                {{ __('messages.get_in_touch_heading') }}
            </h1>
            <p class="mt-4 sm:mt-6 max-w-2xl mx-auto text-base sm:text-lg md:text-xl text-indigo-100 text-center">
                {{ __('messages.here_to_help') }}
            </p>
        </div>
    </div>
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 pb-12">
        <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-6 sm:p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Contact Details -->
                <div class="space-y-6">
                    <h2 class="text-2xl font-bold text-gray-900">{{ __('messages.contact_information') }}</h2>

                    <!-- Address -->
                    <div class="flex items-start space-x-3 [dir='rtl']:space-x-reverse">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">{{ __('messages.address') }}</h3>
                            <p class="mt-1 text-gray-600">{{ __('messages.address_value') }}</p>
                        </div>
                    </div>

                    <!-- WhatsApp -->
                    <div class="flex items-start space-x-3 [dir='rtl']:space-x-reverse">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">{{ __('messages.mobile_whatsapp') }}</h3>
                            <p class="mt-1 text-gray-600">
                                <a href="https://wa.me/966559548756" target="_blank"
                                    class="hover:text-indigo-600">0559548756</a>
                            </p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-start space-x-3 [dir='rtl']:space-x-reverse">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">{{ __('messages.email') }}</h3>
                            <p class="mt-1 text-gray-600">
                                <a href="mailto:lexicontranslation@gmail.com"
                                    class="hover:text-indigo-600">lexicontranslation@gmail.com</a>
                            </p>
                        </div>
                    </div>

                    <!-- Working Hours -->
                    <div class="flex items-start space-x-3 [dir='rtl']:space-x-reverse">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">{{ __('messages.working_hours') }}</h3>
                            <div class="mt-1 space-y-1 text-gray-600">
                                <p>{{ __('messages.saturday_thursday') }}</p>
                                <p>{{ __('messages.friday_closed') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Google Maps -->
                <div class="h-[400px] bg-gray-100 rounded-lg overflow-hidden">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.2324290115507!2d46.70113007536567!3d24.696857978036423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03735acadc6d%3A0x4a37c93f5f4d2c8e!2sMcDonald&#39;s!5e1!3m2!1sen!2sbd!4v1763473700812!5m2!1sen!2sbd"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
