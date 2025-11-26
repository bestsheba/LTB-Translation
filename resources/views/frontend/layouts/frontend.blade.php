<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <x-meta-tag />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body class="bg-gradient-to-br from-blue-50 via-white to-blue-100">
    @include('components.frontend-nav')
    <main class="pt-[110px]">
        @yield('content')
    </main>
    <footer class="bg-gray-900 text-gray-300 pt-10 pb-6 mt-10">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 md:gap-10 border-b border-gray-800 pb-8 md:pb-10">
                <div class="space-y-4">
                    <a href="{{ url('/') }}" class="inline-flex items-center">
                        <img class="w-40 sm:w-48 bg-white rounded-md" src="{{ asset('logo.png') }}" alt="">
                    </a>
                    <p class="text-sm leading-relaxed max-w-xs">
                        {{ __('messages.professional_translation_services') }}
                    </p>
                    <div class="flex space-x-4 rtl:space-x-reverse mt-3">
                        <a href="https://www.facebook.com/LexicologyTranslation/" target="_blank"
                            class="hover:text-[#E31E24]" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://x.com/ltbtrasnlation" target="_blank" class="hover:text-[#E31E24]"
                            aria-label="X">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                        <a href="https://www.instagram.com/ltbtranslationoffice/" target="_blank"
                            class="hover:text-[#E31E24]" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>

                <!-- Services -->
                <div class="space-y-3">
                    <h4 class="text-base sm:text-lg font-semibold text-white">
                        {{ __('messages.services') }}
                    </h4>
                    <ul class="space-y-1.5 text-sm">
                        <li>
                            <a href="#" class="hover:text-[#E31E24]">
                                {{ __('messages.document_translation_footer') }}
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-[#E31E24]">
                                {{ __('messages.website_localization') }}
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-[#E31E24]">
                                {{ __('messages.subtitling_transcription') }}
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-[#E31E24]">
                                {{ __('messages.certified_translations_footer') }}
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Company -->
                <div class="space-y-3">
                    <h4 class="text-base sm:text-lg font-semibold text-white">
                        {{ __('messages.company') }}
                    </h4>
                    <ul class="space-y-1.5 text-sm">
                        <li>
                            <a href="{{ route('about') }}" class="hover:text-[#E31E24]">
                                {{ __('messages.about') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('services') }}" class="hover:text-[#E31E24]">
                                {{ __('messages.services') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}" class="hover:text-[#E31E24]">
                                {{ __('messages.contact') }}
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div class="space-y-3">
                    <h4 class="text-base sm:text-lg font-semibold text-white">
                        {{ __('messages.quote') }}
                    </h4>
                    <p class="text-sm mb-2 text-gray-400">
                        {{ __('messages.accurate_reliable_professional') }}
                    </p>
                    <a href="{{ route('quote.index') }}"
                        class="inline-flex items-center justify-center bg-[#E31E24] hover:bg-[#c4191f] px-4 py-2 rounded-md text-white font-medium text-sm sm:text-base transition-colors">
                        {{ __('messages.request_quote') }}
                    </a>
                </div>
            </div>

            <!-- Bottom Section -->
            <div
                class="flex flex-col md:flex-row justify-between items-center gap-3 mt-6 text-xs sm:text-sm text-gray-400">
                <p class="text-center md:text-left">© {{ date('Y') }} {{ __('messages.translation_office') }}.
                    {{ __('messages.all_rights_reserved') }}
                </p>
                <div class="flex flex-wrap justify-center md:justify-end gap-x-4 gap-y-1">
                    <a href="#" class="hover:text-[#E31E24]">
                        {{ __('messages.privacy_policy') }}
                    </a>
                    <a href="#" class="hover:text-[#E31E24]">
                        {{ __('messages.terms_of_service') }}
                    </a>
                    <a href="#" class="hover:text-[#E31E24]">
                        {{ __('messages.sitemap') }}
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <div class="fixed bottom-8 right-5 z-[9999] flex flex-col gap-3">
        <a href="https://wa.me/966559548756" target="_blank"
            class="rounded-full w-[50px] h-[50px] flex justify-center items-center bg-green-500 text-white relative shadow-lg hover:bg-green-600 transition-colors">
            <i class="fab fa-whatsapp text-2xl"></i>
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
        </a>
        <a href="tel:+966559548756"
            class="rounded-full w-[50px] h-[50px] flex justify-center items-center bg-blue-500 text-white shadow-lg hover:bg-blue-600 transition-colors">
            <i class="fas fa-phone text-xl"></i>
        </a>
    </div>
    @stack('script')
</body>

</html>
