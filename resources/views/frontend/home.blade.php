@extends('frontend.layouts.frontend')
@section('title', __('messages.home'))
@section('content')
    <section class="relative">
        <div class="container mx-auto pt-24 pb-10 flex flex-col lg:flex-row items-center">
            <div class="w-full lg:w-1/2 text-center lg:text-left">
                <h1 class="text-3xl rtl:ml-4 sm:text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight">
                    <span class="block mb-2 text-[#D60F12]">{{ __('messages.lexicology_certified') }}</span>
                    <span class="block text-[#00015B]">{{ __('messages.translation_office') }}</span>
                </h1>
                <p class="mt-4 text-[#D60F12] text-sm sm:text-base md:text-lg max-w-md mx-auto lg:mx-0">
                    {{ __('messages.accurate_reliable_professional') }}
                </p>

                <div class="mt-6 flex flex-col sm:flex-row gap-3 justify-center lg:justify-start rtl:ml-4">
                    <a href="{{ route('quote.index') }}"
                        class="px-6 py-3 md:px-8 md:py-4 text-white bg-[#00015B] hover:bg-[#D60F12] rounded-md text-base md:text-lg font-medium transition">
                        {{ __('messages.request_quote') }}
                    </a>
                    <a href="{{ route('contact') }}"
                        class="px-6 py-3 md:px-8 md:py-4 text-[#00015B] bg-white border border-[#00015B] hover:bg-indigo-50 rounded-md text-base md:text-lg font-medium transition">
                        {{ __('messages.contact_us') }}
                    </a>
                </div>
                <p class="mt-4 text-gray-600 text-base sm:text-lg lg:text-xl rtl:ml-4">
                    <span class="text-xl font-bold">{{ __('messages.professional_translation_services') }}</span><br />
                    {{ __('messages.we_provide_fast') }}
                </p>
            </div>
            <div class="w-full lg:w-1/2 mt-10 lg:mt-0">
                <div
                    class="relative h-64 sm:h-80 md:h-[400px] lg:h-[500px] rounded-2xl overflow-hidden shadow-lg bg-gray-100">
                    <img src="{{ asset('translation-office.webp') }}" alt="Translation Office"
                        class="absolute inset-0 w-full h-full object-cover">
                    <div class="absolute inset-0 bg-indigo-700/10"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-8">
        <div class="container mx-auto px-4">
            <h2 class="text-[#00015B] font-semibold text-sm sm:text-2xl uppercase tracking-wider text-center pb-8">
                {{ __('messages.why_choose_us') }}</h2>
            <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-4">
                <div class="flex items-center">
                    <div
                        class="flex-shrink-0 h-12 w-12 flex items-center justify-center rounded-md bg-[#00015B] text-white shadow-md">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <p class="ml-4 text-gray-900 text-base sm:text-lg font-medium rtl:mr-3 !leading-[20px]">
                        {{ __('messages.certified_approved') }}
                    </p>
                </div>
                <div class="flex items-center">
                    <div
                        class="flex-shrink-0 h-12 w-12 flex items-center justify-center rounded-md bg-[#00015B] text-white shadow-md">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <p class="ml-4 text-gray-900 text-base sm:text-lg font-medium rtl:mr-3 !leading-[20px]">
                        {{ __('messages.professional_translators') }}
                    </p>
                </div>
                <div class="flex items-center">
                    <div
                        class="flex-shrink-0 h-12 w-12 flex items-center justify-center rounded-md bg-[#00015B] text-white shadow-md">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <p class="ml-4 text-gray-900 text-base sm:text-lg font-medium rtl:mr-3 !leading-[20px]">
                        {{ __('messages.accurate_timely') }}
                    </p>
                </div>
                <div class="flex items-center">
                    <div
                        class="flex-shrink-0 h-12 w-12 flex items-center justify-center rounded-md bg-[#00015B] text-white shadow-md">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <p class="ml-4 text-gray-900 text-base sm:text-lg font-medium rtl:mr-3 !leading-[20px]">
                        {{ __('messages.competitive_rates') }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-[#D60F12] py-16">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-xl md:text-2xl font-semibold text-white mb-12 relative inline-block">
                {{ __('messages.our_certified_capacities') }}
                <span class="block w-24 h-[1px] bt-white mx-auto mt-3"></span>
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10 text-white">
                <!-- Counter 1 -->
                <div>
                    <h3 class="text-4xl md:text-5xl font-bold mb-2">
                        +<span class="count" data-target="1600">0</span>
                    </h3>
                    <p class="text-white font-semibold uppercase tracking-wide text-sm md:text-base">
                        {{ __('messages.certified_translators') }}
                    </p>
                </div>

                <!-- Counter 2 -->
                <div>
                    <h3 class="text-4xl md:text-5xl font-bold mb-2">
                        +<span class="count" data-target="100">0</span>
                    </h3>
                    <p class="text-white font-semibold uppercase tracking-wide text-sm md:text-base">
                        {{ __('messages.languages') }}
                    </p>
                </div>

                <!-- Counter 3 -->
                <div>
                    <h3 class="text-4xl md:text-5xl font-bold mb-2">
                        +<span class="count" data-target="7000">0</span>
                    </h3>
                    <p class="text-white font-semibold uppercase tracking-wide text-sm md:text-base">
                        {{ __('messages.translated_projects') }}
                    </p>
                </div>

                <!-- Counter 4 -->
                <div>
                    <h3 class="text-4xl md:text-5xl font-bold mb-2">
                        +<span class="count" data-target="2450000">0</span>
                    </h3>
                    <p class="text-white font-semibold uppercase tracking-wide text-sm md:text-base">
                        {{ __('messages.translated_words') }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-8">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-10 text-gray-800">{{ __('messages.languages_heading') }}</h2>

            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-5">
                <!-- Language Card -->
                <div
                    class="group bg-[#00015B] hover:bg-[#D60F12] rounded-2xl shadow-md p-6 text-center hover:shadow-lg transition duration-300 hover:-translate-y-1">
                    <h3 class="font-semibold text-lg text-white">{{ __('messages.english') }}</h3>
                </div>

                <div
                    class="group bg-[#00015B] hover:bg-[#D60F12] rounded-2xl shadow-md p-6 text-center hover:shadow-lg transition duration-300 hover:-translate-y-1">
                    <h3 class="font-semibold text-lg text-white">{{ __('messages.arabic') }}</h3>
                </div>

                <div
                    class="group bg-[#00015B] hover:bg-[#D60F12] rounded-2xl shadow-md p-6 text-center hover:shadow-lg transition duration-300 hover:-translate-y-1">
                    <h3 class="font-semibold text-lg text-white">French</h3>
                </div>

                <div
                    class="group bg-[#00015B] hover:bg-[#D60F12] rounded-2xl shadow-md p-6 text-center hover:shadow-lg transition duration-300 hover:-translate-y-1">
                    <h3 class="font-semibold text-lg text-white">Turkish</h3>
                </div>

                <div
                    class="group bg-[#00015B] hover:bg-[#D60F12] rounded-2xl shadow-md p-6 text-center hover:shadow-lg transition duration-300 hover:-translate-y-1">
                    <h3 class="font-semibold text-lg text-white">Urdu</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gray-50 py-8">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-10">{{ __('messages.faqs') }}</h2>

            <div class="space-y-4">
                <details class="group border border-gray-200 bg-white rounded-xl p-6">
                    <summary class="flex justify-between items-center cursor-pointer">
                        <h3 class="text-lg font-semibold text-gray-900">
                            {{ __('messages.how_long_translation') }}
                        </h3>
                        <span class="text-indigo-600 transition-transform group-open:rotate-180">
                            ▼
                        </span>
                    </summary>
                    <p class="mt-3 text-gray-600">
                        {{ __('messages.translation_time_answer') }}
                    </p>
                </details>

                <details class="group border border-gray-200 bg-white rounded-xl p-6">
                    <summary class="flex justify-between items-center cursor-pointer">
                        <h3 class="text-lg font-semibold text-gray-900">
                            {{ __('messages.which_languages') }}
                        </h3>
                        <span class="text-indigo-600 transition-transform group-open:rotate-180">
                            ▼
                        </span>
                    </summary>
                    <p class="mt-3 text-gray-600">
                        {{ __('messages.languages_answer') }}
                    </p>
                </details>

                <details class="group border border-gray-200 bg-white rounded-xl p-6">
                    <summary class="flex justify-between items-center cursor-pointer">
                        <h3 class="text-lg font-semibold text-gray-900">
                            {{ __('messages.certified_translations_question') }}
                        </h3>
                        <span class="text-indigo-600 transition-transform group-open:rotate-180">
                            ▼
                        </span>
                    </summary>
                    <p class="mt-3 text-gray-600">
                        {{ __('messages.certified_answer') }}
                    </p>
                </details>

                <details class="group border border-gray-200 bg-white rounded-xl p-6">
                    <summary class="flex justify-between items-center cursor-pointer">
                        <h3 class="text-lg font-semibold text-gray-900">
                            {{ __('messages.how_request_quote') }}
                        </h3>
                        <span class="text-indigo-600 transition-transform group-open:rotate-180">
                            ▼
                        </span>
                    </summary>
                    <p class="mt-3 text-gray-600">
                        {{ __('messages.request_quote_answer') }}
                    </p>
                </details>
            </div>
        </div>
    </section>
@endsection
@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const counters = document.querySelectorAll(".count");
            const speed = 150; // smaller = faster

            const animateCount = (counter) => {
                const target = +counter.getAttribute("data-target");
                const count = +counter.innerText;
                const increment = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(() => animateCount(counter), 20);
                } else {
                    counter.innerText = target.toLocaleString();
                }
            };

            // Trigger animation when visible
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("visible");
                        animateCount(entry.target);
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.5
            });

            counters.forEach(counter => observer.observe(counter));
        });
    </script>
@endpush
