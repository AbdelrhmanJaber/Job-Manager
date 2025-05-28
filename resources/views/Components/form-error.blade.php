@props(['name'])

@error($name)
    <p class="text-ts text-red-500 font-semibold">{{ $message }}</p>
@enderror