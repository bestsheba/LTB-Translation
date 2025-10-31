<nav x-data="{ open: false }" class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ url('/') }}" class="font-bold text-xl text-gray-800">
                        LTB Translation
                    </a>
                </div>

                <!-- Navigation Links (Desktop) -->
                <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
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

            <!-- Mobile menu button -->
            <div class="flex items-center sm:hidden">
                <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" x-show="!open" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="h-6 w-6" x-show="open" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div x-show="open" class="sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
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