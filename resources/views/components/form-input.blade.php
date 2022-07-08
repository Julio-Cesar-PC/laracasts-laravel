@props(['name', 'type' => 'text'])

<div class="mb-6">
    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
           for="{{ $name }}"
    >
        {{ $name }}
    </label>

    <input class="border border-gray-400 p-2 w-full"
           type="{{ $type }}"
           name="{{ $name }}"
           value="{{ old($name) }}"
           id="{{ $name }}"
           placeholder="{{ ucwords($name) }} here..."
           required
    >
    @error($name)
    <p class="text-red-500 text-xs italic">{{ $message }}</p>
    @enderror
</div>
