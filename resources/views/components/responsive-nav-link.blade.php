@props(['active' => false])

@php
    $classes = $active
        ? 'block pl-3 pr-4 py-2 border-l-4 border-[#E31E24] text-base font-medium text-[#E31E24] bg-[#E31E24]/10'
        : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-[#00015B] hover:text-[#E31E24] hover:bg-gray-50 hover:border-gray-300 transition-colors';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
