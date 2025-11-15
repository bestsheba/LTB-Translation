@extends('frontend.layouts.frontend')
@section('title', __('messages.services_page_title'))
@section('content')
    <div class="relative py-12 sm:py-16 lg:py-20 mt-20 bg-indigo-600 mb-8">
        <div class="absolute inset-0 bg-gradient-to-r from-indigo-800 to-indigo-600 opacity-90"></div>
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold tracking-tight text-white text-center">
                {{ __('messages.our_translation_services') }}
            </h1>
            <p class="mt-4 sm:mt-6 max-w-2xl mx-auto text-base sm:text-lg md:text-xl text-indigo-100 text-center">
                {{ __('messages.professional_translation_services') }}
            </p>
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-8">{{ __('messages.certified_services_include') }}</h2>

        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($services as $service)
                <div
                    class="relative bg-white p-6 rounded-lg border border-gray-100 shadow-sm hover:shadow-md transition-shadow duration-300">
                    <div class="flex items-center mb-4">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="{{ $service['icon'] }}" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="ml-4 rtl:mr-4 text-lg font-medium text-gray-900">{{ $service['title'] }}</h3>
                    </div>
                    <p class="text-gray-500 text-sm">{{ $service['description'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="mt-16">
            <h2 class="text-2xl font-bold text-gray-900 mb-8">{{ __('messages.languages_we_translate') }}</h2>
            <div class="bg-gray-50 rounded-lg p-8">
                <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-4">
                    @foreach ($languages as $language)
                        <div class="flex items-center justify-center p-4 bg-white rounded-lg shadow-sm">
                            <span class="text-gray-900 font-medium">{{ $language }}</span>
                        </div>
                    @endforeach
                    <div class="flex items-center justify-center p-4 bg-white rounded-lg shadow-sm">
                        <span class="text-gray-600 italic">{{ __('messages.more_upon_request') }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="mt-16 bg-indigo-50 rounded-lg px-6 py-12 text-center">
            <h2 class="text-2xl font-bold text-indigo-900 mb-4">{{ __('messages.need_translation') }}</h2>
            <p class="text-indigo-700 mb-8">{{ __('messages.get_in_touch') }}</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4 space-x-0 sm:space-x-4 [dir='rtl']:space-x-reverse">
                <a href="{{ url('/quote') }}"
                    class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                    {{ __('messages.request_quote') }}
                </a>
                <a href="{{ url('/contact') }}"
                    class="inline-flex items-center justify-center px-6 py-3 border border-indigo-600 text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50">
                    {{ __('messages.contact_us') }}
                </a>
            </div>
        </div>
    </div>
@endsection
