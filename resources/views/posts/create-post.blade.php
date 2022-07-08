<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-10 rounded-xl">
            <h1 class="text-center font-bold text-xl pb-10">Post</h1>
            <form method="POST" action="/admin/posts" class="mt-10" enctype="multipart/form-data">
                @csrf

                <x-form-input name="title" />

                <x-form-input name="slug" />

                <x-form-input name="thumbnail" type="file" />

                <x-form-textarea name="excerpt" />

                <x-form-textarea name="body" />

                <x-form-select name="category_id" label="Category" />

                <div class="mb-6">
                    <button type="submit"
                            class="bg-green-400 text-white rounded-xl py-2 px-4 hover:bg-green-500"
                    >
                        Publish
                    </button>
                </div>
                @error('$message')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </form>
        </main>
    </section>

</x-layout>
