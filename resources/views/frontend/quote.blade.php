@extends('frontend.layouts.frontend')
@section('title', 'Translation Services')
@section('content')
    <div class="relative py-12 sm:py-16 lg:py-20 mt-20 bg-indigo-600 mb-8">
        <div class="absolute inset-0 bg-gradient-to-r from-indigo-800 to-indigo-600 opacity-90"></div>
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold tracking-tight text-white text-center">
                Get a Free Translation Quote
            </h1>
            <p class="mt-4 sm:mt-6 mx-auto text-base sm:text-lg md:text-xl text-indigo-100 text-center">
                Please fill out the form below or contact us via WhatsApp to get a quick quotation.
            </p>
        </div>
    </div>
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 pb-12">
        <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-6 sm:p-8">
            @if (session('success'))
                <div class="mb-8 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded relative"
                    role="alert">
                    <p class="font-medium">{{ session('success') }}</p>
                </div>
            @endif

            <form action="{{ route('quote.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <!-- Full Name -->
                <div class="space-y-2">
                    <label for="full_name" class="block text-sm font-medium text-gray-900">Full Name</label>
                    <input type="text" name="full_name" id="full_name" value="{{ old('full_name') }}" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 focus:ring-2">
                    @error('full_name')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div class="space-y-2">
                    <label for="email" class="block text-sm font-medium text-gray-900">Email Address</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 focus:ring-2">
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Phone -->
                <div class="space-y-2">
                    <label for="phone" class="block text-sm font-medium text-gray-900">Phone Number / WhatsApp</label>
                    <input type="tel" name="phone" id="phone" value="{{ old('phone') }}" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 focus:ring-2">
                    @error('phone')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Document Type -->
                <div class="space-y-2">
                    <label for="document_type" class="block text-sm font-medium text-gray-900">Type of Document</label>
                    <select name="document_type" id="document_type" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 focus:ring-2">
                        <option value="">Select document type</option>
                        @foreach ($documentTypes as $type)
                            <option value="{{ $type }}" {{ old('document_type') == $type ? 'selected' : '' }}>
                                {{ $type }}
                            </option>
                        @endforeach
                    </select>
                    @error('document_type')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Languages -->
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <div class="space-y-2">
                        <label for="source_language" class="block text-sm font-medium text-gray-900">Source Language</label>
                        <select name="source_language" id="source_language" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 focus:ring-2">
                            <option value="">Select source language</option>
                            @foreach ($languages as $language)
                                <option value="{{ $language }}"
                                    {{ old('source_language') == $language ? 'selected' : '' }}>
                                    {{ $language }}
                                </option>
                            @endforeach
                        </select>
                        @error('source_language')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label for="target_language" class="block text-sm font-medium text-gray-900">Target Language</label>
                        <select name="target_language" id="target_language" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 focus:ring-2">
                            <option value="">Select target language</option>
                            @foreach ($languages as $language)
                                <option value="{{ $language }}"
                                    {{ old('target_language') == $language ? 'selected' : '' }}>
                                    {{ $language }}
                                </option>
                            @endforeach
                        </select>
                        @error('target_language')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- File Upload -->
                <div class="space-y-2">
                    <label for="document" class="block text-sm font-medium text-gray-900">Upload File (optional)</label>
                    <div class="mt-1">
                        <input type="file" name="document" id="document"
                            class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        <p class="mt-1 text-sm text-gray-500">Max file size: 10MB. Supported formats: PDF, DOC, DOCX, TXT,
                            RTF</p>
                    </div>
                    @error('document')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Message -->
                <div class="space-y-2">
                    <label for="message" class="block text-sm font-medium text-gray-900">Message / Additional Notes</label>
                    <textarea name="message" id="message" rows="4"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 focus:ring-2">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="flex justify-center">
                    <button type="submit"
                        class="w-full sm:w-auto inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-200">
                        Submit Request
                    </button>
                </div>
            </form>

            <div class="mt-8 text-center text-sm text-gray-500">
                We'll respond promptly with a detailed quotation and delivery time.
            </div>
        </div>
    </div>
@endsection
