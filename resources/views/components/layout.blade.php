<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<body style="font-family: Open Sans, sans-serif">
<section class="px-6 py-8">
    <nav class="md:flex md:justify-between md:items-center">
        <div>
            <a href="/">
                <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
            </a>
        </div>

        <div class="mt-8 md:mt-0">
            @guest
                <a href="/login"
                   class="inline-block px-4 py-2 leading-none border rounded text-black border-white hover:border-transparent hover:text-green-500 hover:bg-white">Login</a>
                <a href="/register"
                   class="inline-block x-4 py-2 leading-none border rounded text-black border-white hover:border-transparent hover:text-green-500 hover:bg-white">Register</a>
            @else
                <div class="flex items-center">
                    <div class="flex gap-4 items-center">

                        {{--                    <span--}}
                        {{--                        class="inline-block x-4 py-2 leading-none border rounded text-green-500 border-white hover:border-transparent"><span--}}
                        {{--                            class="text-black">Walcome back</span> {{ auth()->user()->name }}</span>--}}
                        <img src="https://i.pravatar.cc/50?u={{ auth()->id() }}" alt="avatar" class="rounded-full">
                        <x-dropdown>
                            <x-slot name="trigger">
                                <button class="flex items-center text-black bg-gray-300 p-2 rounded-full hover:bg-green-200">
                                    Welcome! {{ auth()->user()->name }}
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M5.05 4.05a7 7 0 0 1 9.9 9.9L10 18l-1.8-1.8a7 7 0 0 1 0-12.7zM10 11a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                                    </svg>
                                </button>
                            </x-slot>

                            <x-dropdown-item href="/">Home</x-dropdown-item>
                            <x-dropdown-item href="/admin/posts">All Posts</x-dropdown-item>
                            <x-dropdown-item href="/myprofile">Profile</x-dropdown-item>
                            <x-dropdown-item href="/myposts">My Posts</x-dropdown-item>
                            <x-dropdown-item href="/admin/posts/create">New Post</x-dropdown-item>
                            <x-dropdown-item href="/logout">Logout</x-dropdown-item>

                        </x-dropdown>
                    </div>
                    @endguest
                    <a href="#newsletter"
                       class="bg-green-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                        Subscribe for Updates
                    </a>
                </div>
        </div>

    </nav>

    {{ $slot }}

    <footer id="newsletter"
            class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
        {{--        <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">--}}
        <h5 class="text-3xl">Stay in touch with the latest posts</h5>
        <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

        <div class="mt-10">
            <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                <form method="POST" action="/newsletter" class="lg:flex text-sm">
                    @csrf
                    <div class="lg:py-3 lg:px-5 flex items-center">
                        <label for="email" class="hidden lg:inline-block">
                            <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                        </label>

                        <input id="email" name="email" type="email" placeholder="Your email address"
                               class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                    </div>

                    <button type="submit"
                            class="transition-colors duration-300 bg-green-500 hover:bg-green-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                    >
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </footer>
</section>
@if(session()->has('message'))
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 6000)"
         x-show="show"
         class="fixed bg-green-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
        <p>{{ session()->get('message') }}</p>
    </div>
@endif
</body>
