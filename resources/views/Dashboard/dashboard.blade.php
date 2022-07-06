<x-layout>
    @include('posts._header')

    <style>

    </style>

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if(auth()->user()->posts->count())

            {{--        {{ dd(auth()->user()->posts) }}--}}

            {{--            <x-posts-grid :posts="{{ auth()->user()->posts }}"></x-posts-grid>--}}
            <div class="lg:grid lg:grid-cols-6">
                @foreach(auth()->user()->posts as $post)
                    <x-post-card
                        :post="$post"
                        class="{{ $loop->iteration < 0 ? 'col-span-3' : 'col-span-2' }}"
                    />
                @endforeach
            </div>

            {{--            {{ auth()->user()->posts }}--}}
        @else
            <p class="text-center">No posts yet :(</p>
        @endif
        <a href="/create-post">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Create new post
            </button>
        </a>

    </main>
</x-layout>
