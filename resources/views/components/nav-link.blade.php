@props(['active' => false])

@php
$classes = $active
    ? 'inline-flex items-center px-1 pt-1 text-sm font-medium text-indigo-600'
    : 'inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:text-gray-900';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>