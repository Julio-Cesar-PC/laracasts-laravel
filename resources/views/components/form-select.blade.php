@props(['name', 'label'])

<div class="mb-6">
    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
           for="{{ $name }}"
    >
        {{ $label }}
    </label>

    <select name="{{ $name }}">
        @php
            $categories = \App\Models\Category::all();
        @endphp
        @foreach($categories as $category)
            <option value="{{ $category->id }}"
                {{--                                {{ old('category_id') = $category->id ? 'selected' : '' }}--}}
            >{{ ucwords($category->name) }}</option>
        @endforeach
    </select>
    @error('{{ $name }}')
    <p class="text-red-500 text-xs italic">{{ $message }}</p>
    @enderror
</div>
