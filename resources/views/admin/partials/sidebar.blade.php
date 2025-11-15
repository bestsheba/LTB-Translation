<div class="flex flex-col h-full">
    <!-- Sidebar Header -->
    <div class="px-4 md:px-6 py-6 border-b border-gray-200 flex items-center justify-between">
        <div class="flex items-center space-x-3 flex-1">
            <div
                class="w-10 h-10 bg-gradient-to-br from-blue-600 to-purple-600 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z">
                    </path>
                </svg>
            </div>
            <div class="hidden md:block">
                <h2 class="text-lg font-bold text-gray-900">Admin</h2>
                <p class="text-xs text-gray-500">Control Panel</p>
            </div>
        </div>

        <!-- Close button for mobile -->
        <button @click="sidebarOpen = false" class="md:hidden p-2 rounded-lg hover:bg-gray-100">
            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    <!-- Navigation Menu -->
    <nav class="flex-1 px-3 md:px-4 py-6 space-y-2 overflow-y-auto">
        <!-- Dashboard Link -->
        <a href="{{ route('admin.dashboard') }}" @click="window.innerWidth < 768 && (sidebarOpen = false)"
            class="group flex items-center px-3 md:px-4 py-3 rounded-lg transition {{ request()->routeIs('admin.dashboard') ? 'bg-blue-50 text-blue-600 border-l-4 border-blue-600' : 'text-gray-700 hover:bg-gray-50' }}">
            <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-3m0 0l7-4 7 4M5 9v10a1 1 0 001 1h12a1 1 0 001-1V9m-9 11l4-4m0 0l4-4m-4 4l-4-4m4 4l4 4">
                </path>
            </svg>
            <span class="font-medium text-sm md:text-base">Dashboard</span>
            @if (request()->routeIs('admin.dashboard'))
                <span class="ml-auto w-2 h-2 bg-blue-600 rounded-full"></span>
            @endif
        </a>

        <!-- Languages Link (example menu item) -->
        <a href="#" @click="window.innerWidth < 768 && (sidebarOpen = false)"
            class="group flex items-center px-3 md:px-4 py-3 rounded-lg transition text-gray-700 hover:bg-gray-50">
            <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 5a2 2 0 012-2h3.28a1 1 0 00.948-.684l1.498-4.493a1 1 0 011.502-.684l1.498 4.493a1 1 0 00.948.684H19a2 2 0 012 2v1M3 19a2 2 0 002 2h3.28a1 1 0 00.948-.684l1.498-4.493a1 1 0 011.502-.684l1.498 4.493a1 1 0 00.948.684H19a2 2 0 002-2v-1">
                </path>
            </svg>
            <span class="font-medium text-sm md:text-base">Languages</span>
        </a>

        <!-- Pages Link (example menu item) -->
        <a href="#" @click="window.innerWidth < 768 && (sidebarOpen = false)"
            class="group flex items-center px-3 md:px-4 py-3 rounded-lg transition text-gray-700 hover:bg-gray-50">
            <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z">
                </path>
            </svg>
            <span class="font-medium text-sm md:text-base">Pages</span>
        </a>
    </nav>

    <!-- Sidebar Footer -->
    <div class="border-t border-gray-200 px-3 md:px-4 py-4 space-y-2">
        <!-- Logout Form -->
        <form method="POST" action="{{ route('admin.logout') }}" class="w-full">
            @csrf
            <button type="submit"
                class="w-full flex items-center justify-center px-3 md:px-4 py-3 rounded-lg bg-red-50 text-red-600 hover:bg-red-100 transition font-medium text-sm md:text-base">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                    </path>
                </svg>
                <span class="hidden md:inline">Logout</span>
            </button>
        </form>

        <!-- User Info -->
        <div class="px-3 md:px-4 py-2 bg-gray-50 rounded-lg hidden md:block">
            <p class="text-xs text-gray-500">Logged in as</p>
            <p class="text-xs md:text-sm font-semibold text-gray-900 truncate">
                {{ auth('admin')->user()->email ?? 'Admin' }}</p>
        </div>
    </div>
</div>
