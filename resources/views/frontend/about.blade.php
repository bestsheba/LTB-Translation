@extends('frontend.layouts.frontend')
@section('title', __('messages.about'))
@section('content')
    <div class="relative py-12 sm:py-16 lg:py-20 mt-20 bg-indigo-600 mb-8">
        <div class="absolute inset-0 bg-gradient-to-r from-indigo-800 to-indigo-600 opacity-90"></div>
        <div class="relative mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold tracking-tight text-white text-center">
                {{ __('messages.about') }}
            </h1>
        </div>
    </div>
    <section>
        <div class="container mx-auto">
            <div class="prose prose-lg mx-auto">
                <p class="text-gray-600 leading-relaxed mb-6">
                    {{ __('messages.about_description_1') }}
                </p>
                <p class="text-gray-600 leading-relaxed mb-6">
                    {{ __('messages.about_description_2') }}
                </p>
                <p class="text-gray-600 leading-relaxed">
                    {{ __('messages.about_description_3') }}
                </p>
            </div>
        </div>
    </section>
    <section class="py-10">
        <div class="container mx-auto">
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-[#00015B] hover:bg-[#D60F12] rounded-lg shadow-sm p-8">
                    <h2 class="text-2xl font-bold text-white mb-4">{{ __('messages.our_mission') }}</h2>
                    <p class="text-white">
                        {{ __('messages.mission_text') }}
                    </p>
                </div>
                <div class="bg-[#00015B] hover:bg-[#D60F12] rounded-lg shadow-sm p-8">
                    <h2 class="text-2xl font-bold text-white mb-4">{{ __('messages.our_vision') }}</h2>
                    <p class="text-white">
                        {{ __('messages.vision_text') }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-10">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold text-center text-gray-900 mb-8">{{ __('messages.key_features') }}</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-6">
                <div class="text-center p-6 bg-gray-50 rounded-lg">
                    <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-[#00015B]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0110.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">{{ __('messages.international_recognition') }}</h3>
                    <p class="text-sm text-gray-600 mt-2">{{ __('messages.international_desc') }}</p>
                </div>
                <div class="text-center p-6 bg-gray-50 rounded-lg">
                    <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-[#00015B]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">{{ __('messages.native_experts') }}</h3>
                    <p class="text-sm text-gray-600 mt-2">{{ __('messages.native_experts_desc') }}</p>
                </div>
                <div class="text-center p-6 bg-gray-50 rounded-lg">
                    <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-[#00015B]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">{{ __('messages.quality_assurance') }}</h3>
                    <p class="text-sm text-gray-600 mt-2">{{ __('messages.quality_assurance_desc') }}</p>
                </div>
                <div class="text-center p-6 bg-gray-50 rounded-lg">
                    <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-[#00015B]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">{{ __('messages.fast_turnaround') }}</h3>
                    <p class="text-sm text-gray-600 mt-2">{{ __('messages.fast_turnaround_desc') }}</p>
                </div>
                <div class="text-center p-6 bg-gray-50 rounded-lg">
                    <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-[#00015B]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">{{ __('messages.document_security') }}</h3>
                    <p class="text-sm text-gray-600 mt-2">{{ __('messages.document_security_desc') }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
