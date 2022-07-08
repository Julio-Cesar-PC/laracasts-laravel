@props(['active' => false])

@php
    $classes = 'block text-left px-3 text-sm leading-6 hover:bg-green-300 focus:bg-green-300';

    if($active) $classes .= ' bg-gray-300';
@endphp

<a {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</a>
