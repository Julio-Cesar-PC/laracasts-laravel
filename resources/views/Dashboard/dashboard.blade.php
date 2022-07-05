<x-layout>
    @include('posts._header')


    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if(auth()->user()->posts->count())
        {{ dd(auth()->user()->posts->first()) }}
{{--            <x-posts-grid :posts="{{ auth()->user()->posts }}"/>--}}

{{--            {{ $posts->links() }}--}}
        @else
            <p class="text-center">No posts yet :(</p>
        @endif
    </main>

</x-layout>
