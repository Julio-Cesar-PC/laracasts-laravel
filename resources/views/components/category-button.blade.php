@props(['category'])

<a href="/?category={{ $category->slug }}"
   class="px-3 py-1 border border-black rounded-full text-black-300 text-xs uppercase font-semibold"
   style="font-size: 10px">{{ $category->name }}</a>
