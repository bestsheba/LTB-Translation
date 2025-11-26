@props(['active' => false])

@php
    $classes = $active
        ? 'inline-flex items-center px-1 pt-1 text-sm font-medium text-[#E31E24]'
        : 'inline-flex items-center px-1 pt-1 text-sm font-medium text-[#00015B] hover:text-[#E31E24] transition-colors';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
