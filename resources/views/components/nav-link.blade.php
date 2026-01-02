@props(['active' => false])

<a
    class="{{ $active ? 'bg-gray-950/50' : 'hover:underline decoration-2 underline-offset-2' }} text-white font-medium px-3 py-2 rounded-xl"
    {{ $active ? 'aria-current="page"' : '' }}
    {{ $attributes }}
>{{ $slot }}</a>