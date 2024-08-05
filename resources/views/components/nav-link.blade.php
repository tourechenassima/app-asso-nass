@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-indigo-400 text-lg font-medium leading-5  focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-transparent text-lg font-medium leading-5 hover:text-gray-700 hover:border-gray-300 hover:bg-red-400 hover:text-white focus:outline-none  focus:border-gray-300 transition duration-250 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
