<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} - @yield('title', 'Home')</title>
    <meta name="keywords" content="@yield('keywords','some default keywords')">
    <meta name="description" content="@yield('description', 'default description')">
    <link rel="canonical" href="@yield('canonical_link', url()->current())">

    @stack('styles')
    <link rel="stylesheet" href="/css/app.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="//fonts.googleapis.com/css2?family=Karla&family=Merriweather:wght@400;700&display=swap">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
</head>
<body>
    <div id="app" class="min-h-screen flex flex-col" x-data="{ searchbox: false }">
        <div id="searchbox" class="mb-10 fixed h-screen w-screen pt-16 z-50 bg-black bg-opacity-20" x-show.immediate="searchbox">
            <div class="container mx-auto px-4 sm:max-w-screen-sm" x-on:click.away="searchbox = false" x-on:keydown.escape="searchbox = false" x-show.transition="searchbox">
                <form action="#">
                    <input type="search" x-ref="search" name="q" value="{{ request('q') }}" placeholder="Search..." class="shadow-lg w-full p-4 rounded-lg focus:outline-none" required>
                </form>
            </div>
        </div>

        <header class="mb-10 sticky top-0 bg-white">
            <div class="container mx-auto py-2 flex items-center px-4 lg:max-w-screen-lg">
                <a href="{{ route('home') }}" class="text-2xl font-mono py-1 mr-4">
                    {{ config('app.name') }}
                </a>

                <div class="border-l-2 border-gray-500 mr-auto">
                    <a href="https://caesarali.com" class="mx-3" target="_blank">caesarali.com</a>
                </div>

                <a href="{{ route('home') }}" class="mx-3 font-mono">HOME</a>
                <a href="{{ route('topics.index') }}" class="mx-3 font-mono">TOPICS</a>
                <a href="#" class="ml-3" x-on:click.prevent="searchbox = true; $nextTick(() => { $refs.search.focus() });">
                    <svg class="h-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </a>
            </div>
        </header>

        <div id="content" class="mb-10">
            @yield('content')
        </div>

        <footer class="mt-auto">
            <div class="text-gray-600 border-t mt-10">
                <div class="container px-4 py-8 mx-auto flex items-center sm:flex-row flex-col lg:max-w-screen-lg">
                    <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                        <span class="text-xl">{{ config('app.name') }}</span>
                    </a>
                    <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">
                        © {{ date('Y') }} — by
                        <a href="https://twitter.com/caesarali_l" class="text-yellow-800 underline" rel="noopener noreferrer" target="_blank">@caesarali_L</a>
                    </p>

                    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                        <a class="text-gray-500">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-500">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path
                                    d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                </path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-500">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-500">
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                                <path stroke="none"
                                    d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                                </path>
                                <circle cx="4" cy="4" r="2" stroke="none"></circle>
                            </svg>
                        </a>
                    </span>
                </div>
            </div>
        </footer>
    </div>

    @stack('scripts')
</body>
</html>
