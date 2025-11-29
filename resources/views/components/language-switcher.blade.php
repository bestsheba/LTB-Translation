@php
    // Determine the opposite language
    $currentLocale = app()->getLocale();
    $targetLocale = $currentLocale === 'en' ? 'ar' : 'en';
    $buttonText = $currentLocale === 'en' ? 'العربية' : 'English';
@endphp

<a href="{{ route('language.switch', $targetLocale) }}"
    class="flex items-center space-x-2 rtl:space-x-reverse px-3 py-2 rounded-lg hover:bg-gray-200 transition duration-300">
    <i class="fas fa-globe text-gray-700"></i>
    <span class="text-gray-700 font-medium">{{ $buttonText }}</span>
</a>
