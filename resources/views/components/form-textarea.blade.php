@props(['name'])

<div class="mb-6">
    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
           for="{{ $name }}"
    >
        {{ $name }}
    </label>

    <textarea class="border border-gray-400 p-2 w-full"
              name="{{ $name }}"
              placeholder="{{ ucfirst($name) }} here..."
              value="{{ old($name) }}"
              id="{{ $name }}"
              required
    ></textarea>
    @error($name)
    <p class="text-red-500 text-xs italic">{{ $message }}</p>
    @enderror
</div>
