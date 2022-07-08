<x-layout>
    <h1 class="text-center text-x">Meus Posts!</h1>
    <style>

    </style>

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if(auth()->user()->posts->count())

            {{--        {{ dd(auth()->user()->posts) }}--}}

            {{--            <x-posts-grid :posts="{{ auth()->user()->posts }}"></x-posts-grid>--}}
            <div class="flex flex-col">
                @foreach(auth()->user()->posts as $post)
                    <div class="transition-colors duration-300 py-6 px-5 flex gap-4 h-60 hover:bg-green-100">

                        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Blog Post illustration"
                             class="rounded-xl object-contain">

                        <div class="mt-8 flex flex-col justify-between">
                            <header>
                                <div class="space-x-2 flex">
                                    <div class="">
                                        <x-category-button :category="$post->category"/>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <h1 class="text-3xl">
                                        <a href="/posts/{{ $post->slug }}">
                                            {{ $post->title }}
                                        </a>
                                    </h1>

                                    <span class="mt-2 block text-gray-400 text-xs">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                                </div>
                            </header>
                            <div class="justify-end">
                                <a href="/posts/{{ $post->slug }}"
                                   class="mt-6 transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                >edit</a>
                                <a href="/posts/{{ $post->slug }}"
                                   class="mt-6 transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                >X delete</a>
                            </div>


                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center">No posts yet :(</p>
        @endif
        <a href="/admin/posts/create">
            <button class="mt-6 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Create new post
            </button>
        </a>
    </main>
</x-layout>
