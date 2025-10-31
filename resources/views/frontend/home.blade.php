@extends('layouts.frontend')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 bg-white lg:max-w-2xl lg:w-full">
                <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="text-center py-12 sm:py-16 lg:py-20">
                        <h1 class="text-3xl tracking-tight font-bold text-gray-900 sm:text-4xl md:text-5xl lg:text-6xl">
                            <span class="block mb-2">Lexicology Certified</span>
                            <span class="block text-indigo-600">Translation Office</span>
                        </h1>
                        <p class="mt-3 max-w-md mx-auto text-sm sm:text-base text-gray-500 md:mt-5 md:text-xl md:max-w-3xl">
                            Accurate • Reliable • Professional
                        </p>
                        <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                            <div class="w-full sm:w-auto">
                                <a href="{{ url('/quote') }}" class="w-full flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-8">
                                    Request a Quote
                                </a>
                            </div>
                            <div class="mt-3 w-full sm:w-auto sm:mt-0 sm:ml-3">
                                <a href="{{ url('/contact') }}" class="w-full flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-8">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <!-- Background pattern -->
        <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <div class="h-full w-full bg-gray-100 hero-pattern"></div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-sm sm:text-base text-indigo-600 font-semibold tracking-wide uppercase">Why Choose Us</h2>
                <p class="mt-2 text-2xl sm:text-3xl leading-8 font-extrabold tracking-tight text-gray-900 lg:text-4xl">
                    Professional Translation Services in Riyadh
                </p>
                <p class="mt-4 max-w-2xl text-base sm:text-lg text-gray-500 mx-auto lg:text-xl">
                    We provide fast, precise, and officially certified translations for all types of documents.
                </p>
            </div>

            <div class="mt-10">
                <div class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Feature 1 -->
                    <div class="relative">
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <p class="ml-16 text-base sm:text-lg leading-6 font-medium text-gray-900">Certified and approved by official authorities</p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="relative">
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <p class="ml-16 text-base sm:text-lg leading-6 font-medium text-gray-900">Professional translators with linguistic expertise</p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="relative">
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <p class="ml-16 text-base sm:text-lg leading-6 font-medium text-gray-900">Accurate and timely delivery</p>
                    </div>

                    <!-- Feature 4 -->
                    <div class="relative">
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <p class="ml-16 text-base sm:text-lg leading-6 font-medium text-gray-900">Competitive rates</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection