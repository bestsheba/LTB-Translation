<!doctype html>
<html lang="en">

<head>
    <x-meta-tag />
</head>

<body
    class="h-screen flex items-center justify-center bg-gradient-to-br from-blue-600 via-blue-500 to-purple-600 overflow-hidden">
    <!-- Decorative elements -->
    <div
        class="absolute top-0 left-0 w-96 h-96 bg-white opacity-10 rounded-full -translate-x-1/2 -translate-y-1/2 blur-3xl pointer-events-none">
    </div>
    <div
        class="absolute bottom-0 right-0 w-96 h-96 bg-white opacity-10 rounded-full translate-x-1/2 translate-y-1/2 blur-3xl pointer-events-none">
    </div>

    <div class="relative w-full max-w-md px-6 z-10">
        @yield('content')
    </div>
</body>

</html>
