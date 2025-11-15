<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <x-meta-tag />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body class="bg-gradient-to-br from-blue-50 via-white to-blue-100">
    @include('components.frontend-nav')
    <main>
        @yield('content')
    </main>
    <footer class="bg-gray-900 text-gray-300 pt-12 pb-8">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10 border-b border-gray-700 pb-10">
                <div>
                    <a href="{{ url('/') }}" class="font-bold text-2xl transition">
                        <img class="w-60 bg-white" src="{{ asset('logo.png') }}" alt="" srcset="">
                    </a>
                    <p class="text-sm leading-relaxed">
                        {{ __('messages.professional_translation_services') }}
                    </p>
                    <div class="flex space-x-4 rtl:space-x-reverse mt-4">
                        <a href="#" class="hover:text-green-400" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="hover:text-green-400" aria-label="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="hover:text-green-400" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>

                <!-- Services -->
                <div>
                    <h4 class="text-lg font-semibold text-white mb-4">{{ __('messages.services') }}</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#"
                                class="hover:text-green-400">{{ __('messages.document_translation_footer') }}</a></li>
                        <li><a href="#" class="hover:text-green-400">{{ __('messages.website_localization') }}</a>
                        </li>
                        <li><a href="#"
                                class="hover:text-green-400">{{ __('messages.subtitling_transcription') }}</a></li>
                        <li><a href="#"
                                class="hover:text-green-400">{{ __('messages.certified_translations_footer') }}</a></li>
                    </ul>
                </div>

                <!-- Company -->
                <div>
                    <h4 class="text-lg font-semibold text-white mb-4">{{ __('messages.company') }}</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('about') }}" class="hover:text-green-400">{{ __('messages.about') }}</a>
                        </li>
                        <li><a href="{{ route('services') }}"
                                class="hover:text-green-400">{{ __('messages.services') }}</a></li>
                        <li><a href="{{ route('contact') }}"
                                class="hover:text-green-400">{{ __('messages.contact') }}</a></li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div>
                    <h4 class="text-lg font-semibold text-white mb-4">{{ __('messages.quote') }}</h4>
                    <p class="text-sm mb-3">

                    </p>
                    <a href="{{ route('quote.index') }}"
                        class="bg-green-600 hover:bg-green-700 px-4 py-2 rounded-md text-white font-medium">
                        {{ __('messages.request_quote') }}
                    </a>
                </div>
            </div>

            <!-- Bottom Section -->
            <div class="flex flex-col md:flex-row justify-between items-center mt-8 text-sm text-gray-400">
                <p>© 2025 LTB Translation. {{ __('messages.all_rights_reserved') }}</p>
                <div class="flex space-x-4 mt-2 md:mt-0">
                    <a href="#" class="hover:text-green-400">{{ __('messages.privacy_policy') }}</a>
                    <a href="#" class="hover:text-green-400">{{ __('messages.terms_of_service') }}</a>
                    <a href="#" class="hover:text-green-400">{{ __('messages.sitemap') }}</a>
                </div>
            </div>
        </div>
    </footer>
    @php
        $button = [
            'icon' => 'fab fa-whatsapp',
            'url' => 'https://wa.me/966559548756',
            'external' => true,
        ];
    @endphp

    <a href="{{ $button['url'] }}" target="_blank"
        class="hidden fixed bottom-8 right-5 rounded-full w-[50px] h-[50px] md:flex justify-center items-center bg-green-500 text-white">
        <i class="{{ $button['icon'] }} text-2xl"></i>
        <span class="animate-ping absolute inline-flex h-[40px] w-[40px] rounded-full bg-green-400 opacity-75"></span>
    </a>
    @stack('script')
</body>

</html>
