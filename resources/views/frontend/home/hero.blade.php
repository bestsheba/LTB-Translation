<section class="relative bg-white mt-10 lg:mt-0">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-12 md:pt-24 md:pb-16 flex flex-col lg:flex-row items-center gap-10">
        <div class="w-full lg:w-1/2 text-center lg:text-left">
            <h1
                class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight tracking-tight">
                <span class="block text-[#00015B] mt-2">
                    {{ __('messages.translation_office') }}
                </span>
            </h1>
            <p class="mt-4 text-[#D60F12] text-sm sm:text-base md:text-lg max-w-xl mx-auto lg:mx-0">
                {{ __('messages.accurate_reliable_professional') }}
            </p>

            <div class="mt-6 flex flex-col sm:flex-row gap-3 justify-center lg:justify-start">
                <a href="{{ route('quote.index') }}"
                    class="px-6 py-3 md:px-8 md:py-3.5 text-white bg-[#00015B] hover:bg-[#D60F12] rounded-md text-sm sm:text-base md:text-lg font-medium transition shadow-sm">
                    {{ __('messages.request_quote') }}
                </a>
                <a href="{{ route('contact') }}"
                    class="px-6 py-3 md:px-8 md:py-3.5 text-[#00015B] bg-white border border-[#00015B] hover:bg-indigo-50 rounded-md text-sm sm:text-base md:text-lg font-medium transition">
                    {{ __('messages.contact_us') }}
                </a>
            </div>
            <p class="mt-5 text-gray-600 text-sm sm:text-base md:text-lg lg:text-xl">
                <span class="text-base sm:text-lg md:text-xl font-bold block">
                    {{ __('messages.professional_translation_services') }}
                </span>
                <span class="mt-1 block">
                {{ __('messages.we_provide_fast') }}
                </span>
            </p>
        </div>
        <div class="w-full lg:w-1/2 mt-8 lg:mt-0">
            <div
                class="relative w-full max-w-xl mx-auto h-60 sm:h-72 md:h-[380px] lg:h-[460px] rounded-2xl overflow-hidden shadow-lg bg-gray-100">
                <img src="{{ asset('translation-office.webp') }}" alt="Translation Office"
                    class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-indigo-700/10"></div>
            </div>
        </div>
    </div>
</section>
