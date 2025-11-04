<nav x-data="{ open: false }" class="bg-white shadow-md fixed w-full z-50 top-0 left-0  py-2">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Left: Logo -->
            <div class="flex items-center space-x-8">
                <a href="{{ url('/') }}" class="flex items-center font-bold text-2xl text-indigo-700 hover:text-indigo-800 transition">
                   <img class="w-60" src="{{ asset('logo.png') }}" alt="" srcset="">
                </a>
                <div class="hidden sm:flex sm:space-x-6">
                    <x-nav-link href="{{ url('/') }}" :active="request()->is('/')">
                        Home
                    </x-nav-link>
                    <x-nav-link href="{{ url('/about') }}" :active="request()->is('about')">
                        About Us
                    </x-nav-link>
                    <x-nav-link href="{{ url('/services') }}" :active="request()->is('services')">
                        Services
                    </x-nav-link>
                    <x-nav-link href="{{ url('/quote') }}" :active="request()->is('quote')">
                        Request a Quote
                    </x-nav-link>
                    <x-nav-link href="{{ url('/contact') }}" :active="request()->is('contact')">
                        Contact
                    </x-nav-link>
                </div>
            </div>

            <!-- Right: Mobile Menu Button -->
            <div class="flex items-center sm:hidden">
                <button @click="open = !open"
                    class="p-2 rounded-md text-gray-600 hover:text-indigo-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition">
                    <span class="sr-only">Toggle navigation</span>
                    <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="open" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" x-transition class="sm:hidden bg-white shadow-inner border-t border-gray-100">
        <div class="pt-2 pb-4 space-y-1">
            <x-responsive-nav-link href="{{ url('/') }}" :active="request()->is('/')">
                Home
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ url('/about') }}" :active="request()->is('about')">
                About Us
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ url('/services') }}" :active="request()->is('services')">
                Services
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ url('/quote') }}" :active="request()->is('quote')">
                Request a Quote
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ url('/contact') }}" :active="request()->is('contact')">
                Contact
            </x-responsive-nav-link>
        </div>
    </div>
</nav>
