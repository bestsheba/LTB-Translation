<nav x-data="{ open: false }" class="bg-white shadow-md fixed w-full z-50 top-0 left-0">
    <!-- Topbar -->
    <div class="bg-white border-b border-gray-100">
        <div class="container max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 h-10 flex justify-between items-center">
            <!-- Social Icons -->
            <div class="flex items-center space-x-2 rtl:space-x-reverse">
                <a href="https://www.instagram.com/ltbtranslationoffice/" target="_blank"
                    class="w-6 h-6 flex items-center justify-center bg-[#E31E24] text-white rounded hover:bg-[#c4191f] transition-colors">
                    <i class="fab fa-instagram text-xs"></i>
                </a>
                <a href="https://www.facebook.com/LexicologyTranslation/" target="_blank"
                    class="w-6 h-6 flex items-center justify-center bg-[#E31E24] text-white rounded hover:bg-[#c4191f] transition-colors">
                    <i class="fab fa-facebook-f text-xs"></i>
                </a>
                <a href="https://x.com/ltbtrasnlation" target="_blank"
                    class="w-6 h-6 flex items-center justify-center bg-[#E31E24] text-white rounded hover:bg-[#c4191f] transition-colors">
                    <i class="fa-brands fa-x-twitter text-xs"></i>
                </a>
            </div>

            <!-- Phone Number -->
            <a href="tel:0559548756"
                class="flex items-center gap-2 text-[#00015B] hover:text-[#E31E24] transition-colors text-sm font-medium">
                <span>0559548756</span>
                <i class="fas fa-phone transform scale-x-[-1]"></i>
            </a>
        </div>
    </div>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Left: Logo -->
            <div class="flex items-center space-x-8 rtl:space-x-reverse">
                <a href="{{ url('/') }}"
                    class="flex items-center font-bold text-2xl text-[#00015B] hover:text-[#E31E24] transition">
                    <img class="w-60" src="{{ asset('logo.png') }}" alt="" srcset="">
                </a>
                <div class="hidden sm:flex items-center sm:space-x-6 rtl:space-x-reverse">
                    <x-nav-link href="{{ url('/') }}" :active="request()->is('/')">
                        {{ __('messages.home') }}
                    </x-nav-link>
                    <x-nav-link href="{{ url('/about') }}" :active="request()->is('about')">
                        {{ __('messages.about') }}
                    </x-nav-link>
                    <x-nav-link href="{{ url('/services') }}" :active="request()->is('services')">
                        {{ __('messages.services') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('quote.index') }}" :active="request()->is('quote')">
                        {{ __('messages.quote') }}
                    </x-nav-link>
                    <x-nav-link href="{{ url('/contact') }}" :active="request()->is('contact')">
                        {{ __('messages.contact') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Right: Language Switcher and Mobile Menu Button -->
            <div class="flex items-center space-x-4 rtl:space-x-reverse">
                <!-- Language Switcher -->
                <div class="hidden sm:block">
                    <x-language-switcher />
                </div>

                <!-- Mobile Menu Button -->
                <button @click="open = !open"
                    class="p-2 rounded-md text-gray-600 hover:text-[#E31E24] hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-[#E31E24] transition sm:hidden">
                    <span class="sr-only">Toggle navigation</span>
                    <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="open" x-cloak class="w-6 h-6" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" x-transition class="sm:hidden bg-white shadow-inner border-t border-gray-100">
        <div class="pt-2 pb-4 space-y-1 rtl:space-y-reverse">
            <x-responsive-nav-link href="{{ url('/') }}" :active="request()->is('/')">
                {{ __('messages.home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ url('/about') }}" :active="request()->is('about')">
                {{ __('messages.about') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ url('/services') }}" :active="request()->is('services')">
                {{ __('messages.services') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ url('/quote') }}" :active="request()->is('quote')">
                {{ __('messages.quote') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ url('/contact') }}" :active="request()->is('contact')">
                {{ __('messages.contact') }}
            </x-responsive-nav-link>
            <!-- Mobile Language Switcher -->
            <div class="px-4 py-2">
                <x-language-switcher />
            </div>
        </div>
    </div>
</nav>
