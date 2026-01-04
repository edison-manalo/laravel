@props(['name'])

@error($name)
    <p class="mt-2 text-red-400 font-medium">{{ $message }}</p>
@enderror