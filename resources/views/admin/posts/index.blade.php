<x-layout>
    @php($posts = App\Models\Post::all())
    <x-post-table :posts="$posts"></x-post-table>
</x-layout>
