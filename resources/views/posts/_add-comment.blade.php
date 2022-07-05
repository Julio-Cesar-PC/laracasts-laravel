@auth()
    <form method="POST" action="/posts/{{ $post->slug }}/comments" class="border border-gray-200 p-6 rounded-xl bg-gray-100 flex flex-col gap-4">
        @csrf
        <div class="flex gap-2 items-start space-y-2">
            <img src="https://i.pravatar.cc/50?u={{ auth()->id() }}" alt="avatar" class="rounded-xl"
                 width="50" height="50">
            <textarea name="body" id="body" class="resize-y w-full rounded-md mt-4 focus:outline-none focus:ring-2 focus:ring-green-500"
                      placeholder="Comment here!!!" required></textarea>
        </div>
        @error('body')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
        <div class="flex justify-end">
            <button type="submit" class="bg-green-400 text-white rounded-3xl py-2 px-4 hover:bg-green-500">
                Post Comment
            </button>
        </div>
    </form>
@else
    <p class="text-gray-500 text-xs italic">
        Please <a href="/login">login</a> to post a comment.
@endauth
<h2 class="font-bold text-2xl lg:text-3xl mb-10">
    Comments
</h2>
@foreach($post->comments as $comment)
    <x-post-comment :comment="$comment"/>
@endforeach
