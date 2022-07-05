@props(['comment'])
<article class="flex gap-4 bg-gray-100 p-5 rounded-xl">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/50?u={{ $comment->author->id }}" alt="avatar" class="rounded-xl" width="50" height="50">
    </div>

    <div>
        <header>
            <h3 class="font-bold">
                <a href="/?author={{ $comment->author->username }}">
                    {{ $comment->author->name }}
                </a>
            </h3>
            <p class="text-xs">
                posted
                <time>{{ $comment->created_at->diffForHumans() }}</time>
            </p>

            <p>{{ $comment->body }}</p>
        </header>
    </div>
</article>
