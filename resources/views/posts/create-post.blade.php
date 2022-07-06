<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-10 rounded-xl">
            <h1 class="text-center font-bold text-xl pb-10">Post</h1>
            <form method="POST" action="/create-post" class="mt-10">
                @csrf

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="title"
                    >
                        Title
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="title"
                           value="{{ old('title') }}"
                           id="title"
                           required
                    >
                    @error('title')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="excerpt"
                    >
                        Excerpt
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="excerpt"
                           value="{{ old('excerpt') }}"
                           id="excerpt"
                           required
                    >
                    @error('excerpt')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="body"
                    >
                        Body
                    </label>

                    <textarea class="border border-gray-400 p-2 w-full"
                              name="body"
                              placeholder="Text here..."
                              value="{{ old('body') }}"
                              id="body"
                              required
                    ></textarea>
                    @error('email')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="category"
                    >
                        Category
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="category"
                           name="category"
                           id="category"
                           required
                    >
                    @error('password')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit"
                            class="bg-green-400 text-white rounded py-2 px-4 hover:bg-green-500"
                    >
                        Submit
                    </button>
                </div>
                @error('$message')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </form>
        </main>
    </section>

</x-layout>
