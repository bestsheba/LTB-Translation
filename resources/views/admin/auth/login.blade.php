@extends('admin.layouts.guest')

@section('title', 'Admin Login')

@section('content')
    <div class="bg-white bg-opacity-95 backdrop-blur-sm p-8 rounded-2xl shadow-2xl border border-white border-opacity-20">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex justify-center mb-4">
                <div
                    class="w-12 h-12 bg-gradient-to-br from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                        </path>
                    </svg>
                </div>
            </div>
            <h1 class="text-3xl font-bold text-center text-gray-900">Admin Panel</h1>
            <p class="text-center text-gray-600 text-sm mt-2">Sign in to your account</p>
        </div>

        <!-- Error Message -->
        @if ($errors->any())
            <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg">
                <p class="text-red-700 text-sm font-medium">{{ $errors->first() }}</p>
            </div>
        @endif

        <!-- Form -->
        <form method="POST" action="{{ route('admin.login.post') }}" class="space-y-5">
            @csrf

            <!-- Email Field -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                <input type="email" name="email" value="{{ old('email') }}" required placeholder="admin@example.com"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition">
            </div>

            <!-- Password Field -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
                <input type="password" name="password" required placeholder="••••••••"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition">
            </div>

            <!-- Remember & Submit -->
            <div class="flex items-center justify-between pt-2">
                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="remember" class="w-4 h-4 rounded border-gray-300">
                    <span class="ml-2 text-sm text-gray-700">Remember me</span>
                </label>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full mt-6 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold py-3 rounded-lg transition transform hover:scale-105 active:scale-95 shadow-lg">
                Sign In
            </button>
        </form>

        <!-- Footer -->
        <p class="text-center text-gray-600 text-xs mt-6">Protected by enterprise-grade security</p>
    </div>
@endsection
