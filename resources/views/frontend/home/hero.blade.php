<section class="relative bg-white mt-10 lg:mt-0 overflow-hidden">
    <!-- Background Video with Overlay -->
    <div class="absolute inset-0 z-0">
        <video autoplay loop muted playsinline class="w-full h-full object-cover">
            <source src="{{ asset('hero.mp4') }}" type="video/mp4">
        </video>
        <!-- Gradient Overlay for better text readability -->
        <div class="absolute inset-0 bg-gradient-to-r from-[#00015B]/50 via-[#00015B]/75 to-[#00015B]/50"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-28 lg:py-32">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Main Heading -->
            <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-white leading-tight tracking-tight">
                <span class="block animate-fade-in">
                    {{ __('messages.translation_office') }}
                </span>
            </h1>

            <!-- Subtitle -->
            <p class="mt-6 text-[#E31E24] text-lg sm:text-xl md:text-2xl font-semibold animate-fade-in-delay-1">
                {{ __('messages.accurate_reliable_professional') }}
            </p>

            <!-- Description -->
            <p
                class="mt-6 text-gray-100 text-base sm:text-lg md:text-xl max-w-3xl mx-auto leading-relaxed animate-fade-in-delay-2">
                <span class="font-semibold text-white">
                    {{ __('messages.professional_translation_services') }}
                </span>
                <span class="block mt-2">
                    {{ __('messages.we_provide_fast') }}
                </span>
            </p>

            <!-- CTA Buttons -->
            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center animate-fade-in-delay-3">
                <a href="{{ route('quote.index') }}"
                    class="group px-8 py-4 text-[#00015B] bg-white hover:bg-[#E31E24] rounded-lg text-base sm:text-lg font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    <span class="flex items-center justify-center gap-2">
                        {{ __('messages.request_quote') }}
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </span>
                </a>
                <a href="{{ route('contact') }}"
                    class="group px-8 py-4 text-white bg-transparent border-2 border-white hover:bg-white hover:text-[#00015B] rounded-lg text-base sm:text-lg font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    <span class="flex items-center justify-center gap-2">
                        {{ __('messages.contact_us') }}
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </span>
                </a>
            </div>

            <!-- Trust Indicators -->
            <div class="mt-12 flex flex-wrap justify-center gap-8 text-white/90 animate-fade-in-delay-4">
                <div class="flex items-center gap-2">
                    <svg class="w-6 h-6 text-[#E31E24]" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                        </path>
                    </svg>
                    <span
                        class="text-sm sm:text-base font-medium">{{ __('messages.certified_translators') ?? 'Certified Translators' }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-6 h-6 text-[#E31E24]" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span
                        class="text-sm sm:text-base font-medium">{{ __('messages.fast_delivery') ?? 'Fast Delivery' }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-6 h-6 text-[#E31E24]" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span
                        class="text-sm sm:text-base font-medium">{{ __('messages.quality_guaranteed') ?? 'Quality Guaranteed' }}</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Decorative Wave at Bottom -->
    <div class="absolute bottom-0 left-0 right-0 z-10">
        <svg class="w-full h-12 sm:h-16 md:h-20" viewBox="0 0 1440 120" fill="none"
            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path
                d="M0 0L60 10C120 20 240 40 360 46.7C480 53 600 47 720 43.3C840 40 960 40 1080 46.7C1200 53 1320 67 1380 73.3L1440 80V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0V0Z"
                fill="white" />
        </svg>
    </div>
</section>

<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in {
        animation: fadeIn 0.8s ease-out forwards;
    }

    .animate-fade-in-delay-1 {
        opacity: 0;
        animation: fadeIn 0.8s ease-out 0.2s forwards;
    }

    .animate-fade-in-delay-2 {
        opacity: 0;
        animation: fadeIn 0.8s ease-out 0.4s forwards;
    }

    .animate-fade-in-delay-3 {
        opacity: 0;
        animation: fadeIn 0.8s ease-out 0.6s forwards;
    }

    .animate-fade-in-delay-4 {
        opacity: 0;
        animation: fadeIn 0.8s ease-out 0.8s forwards;
    }
</style>
