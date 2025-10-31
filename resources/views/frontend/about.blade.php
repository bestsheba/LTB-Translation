@extends('layouts.frontend')

@section('content')
    <div class="bg-white">
        <!-- Header Section -->
        <div class="relative py-16 bg-indigo-600">
            <div class="absolute inset-0 bg-gradient-to-r from-indigo-800 to-indigo-600 opacity-90"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl lg:text-5xl text-center">
                    About Lexicology Certified Translation Office
                </h1>
            </div>
        </div>

        <!-- Main Content -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <!-- Introduction -->
            <div class="prose prose-lg mx-auto">
                <p class="text-gray-600 leading-relaxed mb-12">
                    At Lexicology Certified Translation Office, we specialize in delivering high-quality, certified translations that meet official and professional standards. Based in Riyadh, we serve individuals, businesses, and government institutions with accurate language solutions.
                </p>
            </div>

            <!-- Mission & Vision -->
            <div class="grid md:grid-cols-2 gap-8 mt-12">
                <!-- Mission -->
                <div class="bg-white rounded-lg shadow-sm p-8 border border-gray-100">
                    <h2 class="text-2xl font-bold text-indigo-600 mb-4">Our Mission</h2>
                    <p class="text-gray-600">
                        To bridge language barriers through excellence in translation and exceptional customer service.
                    </p>
                </div>

                <!-- Vision -->
                <div class="bg-white rounded-lg shadow-sm p-8 border border-gray-100">
                    <h2 class="text-2xl font-bold text-indigo-600 mb-4">Our Vision</h2>
                    <p class="text-gray-600">
                        To be among Saudi Arabia's leading certified translation offices known for precision, trust, and professionalism.
                    </p>
                </div>
            </div>

            <!-- Core Values -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-center text-gray-900 mb-8">Core Values</h2>
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Integrity -->
                    <div class="text-center p-6 bg-gray-50 rounded-lg">
                        <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900">Integrity</h3>
                    </div>

                    <!-- Accuracy -->
                    <div class="text-center p-6 bg-gray-50 rounded-lg">
                        <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900">Accuracy</h3>
                    </div>

                    <!-- Confidentiality -->
                    <div class="text-center p-6 bg-gray-50 rounded-lg">
                        <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900">Confidentiality</h3>
                    </div>

                    <!-- Timeliness -->
                    <div class="text-center p-6 bg-gray-50 rounded-lg">
                        <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900">Timeliness</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection