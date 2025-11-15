<!doctype html>
<html lang="en">

<head>
    <x-meta-tag />
</head>

<body class="bg-gray-50" x-data="{ sidebarOpen: false }" @resize.window="sidebarOpen = window.innerWidth >= 768" x-cloak>
    <div class="flex h-screen">
        <!-- Mobile Sidebar Overlay -->
        <div x-show="sidebarOpen" @click="sidebarOpen = false" class="fixed inset-0 bg-black bg-opacity-50 z-40 md:hidden"
            x-transition></div>

        <!-- Sidebar -->
        <aside
            class="w-64 bg-white border-r border-gray-200 shadow-sm overflow-y-auto fixed inset-y-0 left-0 z-50 transform transition-transform duration-200 ease-in-out md:relative md:translate-x-0"
            :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'">
            @include('admin.partials.sidebar')
        </aside>

        <!-- Main Content -->
        <main class="flex-1 flex flex-col overflow-hidden w-full">
            <!-- Top Bar -->
            <div class="bg-white border-b border-gray-200 shadow-sm sticky top-0 z-40">
                <div class="px-4 md:px-6 py-4 flex items-center justify-between">
                    <!-- Mobile Menu Button -->
                    <button @click="sidebarOpen = !sidebarOpen" class="md:hidden p-2 rounded-lg hover:bg-gray-100">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>

                    <h1 class="text-xl md:text-2xl font-bold text-gray-900">@yield('page-title', 'Dashboard')</h1>

                    <div class="flex items-center space-x-2 md:space-x-4">
                        <span class="text-xs md:text-sm text-gray-600 text-right">Welcome,
                            <strong>{{ auth('admin')->user()->name ?? 'Admin' }}</strong></span>
                    </div>
                </div>
            </div>

            <!-- Page Content -->
            <div class="flex-1 overflow-y-auto p-4 md:p-6">
                <div class="max-w-7xl mx-auto">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>

    <script>
        // Initialize sidebar state based on screen size
        document.addEventListener('DOMContentLoaded', () => {
            const handleResize = () => {
                const sidebarElement = document.querySelector('[x-data]');
                if (window.innerWidth >= 768) {
                    Alpine.evaluate(sidebarElement, 'sidebarOpen = true');
                } else {
                    Alpine.evaluate(sidebarElement, 'sidebarOpen = false');
                }
            };

            handleResize();
            window.addEventListener('resize', handleResize);
        });
    </script>
</body>

</html>
<div class="flex h-screen">
    <!-- Mobile Sidebar Overlay -->
    <div x-show="sidebarOpen" @click="sidebarOpen = false" class="fixed inset-0 bg-black bg-opacity-50 z-40 md:hidden"
        x-transition></div>

    <!-- Sidebar -->
    <aside
        class="w-64 bg-white border-r border-gray-200 shadow-sm overflow-y-auto fixed inset-y-0 left-0 z-50 transform transition-transform duration-200 ease-in-out md:relative md:translate-x-0"
        :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'">
        @include('admin.partials.sidebar')
    </aside>

    <!-- Main Content -->
    <main class="flex-1 flex flex-col overflow-hidden w-full">
        <!-- Top Bar -->
        <div class="bg-white border-b border-gray-200 shadow-sm sticky top-0 z-40">
            <div class="px-4 md:px-6 py-4 flex items-center justify-between">
                <!-- Mobile Menu Button -->
                <button @click="sidebarOpen = !sidebarOpen" class="md:hidden p-2 rounded-lg hover:bg-gray-100">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>

                <h1 class="text-xl md:text-2xl font-bold text-gray-900">@yield('page-title', 'Dashboard')</h1>

                <div class="flex items-center space-x-2 md:space-x-4">
                    <span class="text-xs md:text-sm text-gray-600 text-right">Welcome,
                        <strong>{{ auth('admin')->user()->name ?? 'Admin' }}</strong></span>
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <div class="flex-1 overflow-y-auto p-4 md:p-6">
            <div class="max-w-7xl mx-auto">
                @yield('content')
            </div>
        </div>
    </main>
</div>

<script>
    // Initialize sidebar state based on screen size
    document.addEventListener('DOMContentLoaded', () => {
        const handleResize = () => {
            const sidebarElement = document.querySelector('[x-data]');
            if (window.innerWidth >= 768) {
                Alpine.evaluate(sidebarElement, 'sidebarOpen = true');
            } else {
                Alpine.evaluate(sidebarElement, 'sidebarOpen = false');
            }
        };

        handleResize();
        window.addEventListener('resize', handleResize);
    });
</script>
</body>

</html>
