<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @wireUiScripts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @livewireScripts
    @stack('scripts')
</head>

<body class="font-sans antialiased relative">
    <div class="fixed top-0 left-0 bottom-0 w-full h-full">
        <svg xmlns='http://www.w3.org/2000/svg' class="h-full w-full object-cover">
            <rect fill='#ffffff' width='540' height='450' />
            <defs>
                <linearGradient id='a' gradientUnits='userSpaceOnUse' x1='0' x2='0'
                    y1='0' y2='100%' gradientTransform='rotate(183,960,473)'>
                    <stop offset='0' stop-color='#ffffff' />
                    <stop offset='1' stop-color='#B1F5FD' />
                </linearGradient>
                <pattern patternUnits='userSpaceOnUse' id='b' width='807' height='672.5' x='0'
                    y='0' viewBox='0 0 1080 900'>
                    <g fill-opacity='0.04'>
                        <polygon fill='#444' points='90 150 0 300 180 300' />
                        <polygon points='90 150 180 0 0 0' />
                        <polygon fill='#AAA' points='270 150 360 0 180 0' />
                        <polygon fill='#DDD' points='450 150 360 300 540 300' />
                        <polygon fill='#999' points='450 150 540 0 360 0' />
                        <polygon points='630 150 540 300 720 300' />
                        <polygon fill='#DDD' points='630 150 720 0 540 0' />
                        <polygon fill='#444' points='810 150 720 300 900 300' />
                        <polygon fill='#FFF' points='810 150 900 0 720 0' />
                        <polygon fill='#DDD' points='990 150 900 300 1080 300' />
                        <polygon fill='#444' points='990 150 1080 0 900 0' />
                        <polygon fill='#DDD' points='90 450 0 600 180 600' />
                        <polygon points='90 450 180 300 0 300' />
                        <polygon fill='#666' points='270 450 180 600 360 600' />
                        <polygon fill='#AAA' points='270 450 360 300 180 300' />
                        <polygon fill='#DDD' points='450 450 360 600 540 600' />
                        <polygon fill='#999' points='450 450 540 300 360 300' />
                        <polygon fill='#999' points='630 450 540 600 720 600' />
                        <polygon fill='#FFF' points='630 450 720 300 540 300' />
                        <polygon points='810 450 720 600 900 600' />
                        <polygon fill='#DDD' points='810 450 900 300 720 300' />
                        <polygon fill='#AAA' points='990 450 900 600 1080 600' />
                        <polygon fill='#444' points='990 450 1080 300 900 300' />
                        <polygon fill='#222' points='90 750 0 900 180 900' />
                        <polygon points='270 750 180 900 360 900' />
                        <polygon fill='#DDD' points='270 750 360 600 180 600' />
                        <polygon points='450 750 540 600 360 600' />
                        <polygon points='630 750 540 900 720 900' />
                        <polygon fill='#444' points='630 750 720 600 540 600' />
                        <polygon fill='#AAA' points='810 750 720 900 900 900' />
                        <polygon fill='#666' points='810 750 900 600 720 600' />
                        <polygon fill='#999' points='990 750 900 900 1080 900' />
                        <polygon fill='#999' points='180 0 90 150 270 150' />
                        <polygon fill='#444' points='360 0 270 150 450 150' />
                        <polygon fill='#FFF' points='540 0 450 150 630 150' />
                        <polygon points='900 0 810 150 990 150' />
                        <polygon fill='#222' points='0 300 -90 450 90 450' />
                        <polygon fill='#FFF' points='0 300 90 150 -90 150' />
                        <polygon fill='#FFF' points='180 300 90 450 270 450' />
                        <polygon fill='#666' points='180 300 270 150 90 150' />
                        <polygon fill='#222' points='360 300 270 450 450 450' />
                        <polygon fill='#FFF' points='360 300 450 150 270 150' />
                        <polygon fill='#444' points='540 300 450 450 630 450' />
                        <polygon fill='#222' points='540 300 630 150 450 150' />
                        <polygon fill='#AAA' points='720 300 630 450 810 450' />
                        <polygon fill='#666' points='720 300 810 150 630 150' />
                        <polygon fill='#FFF' points='900 300 810 450 990 450' />
                        <polygon fill='#999' points='900 300 990 150 810 150' />
                        <polygon points='0 600 -90 750 90 750' />
                        <polygon fill='#666' points='0 600 90 450 -90 450' />
                        <polygon fill='#AAA' points='180 600 90 750 270 750' />
                        <polygon fill='#444' points='180 600 270 450 90 450' />
                        <polygon fill='#444' points='360 600 270 750 450 750' />
                        <polygon fill='#999' points='360 600 450 450 270 450' />
                        <polygon fill='#666' points='540 600 630 450 450 450' />
                        <polygon fill='#222' points='720 600 630 750 810 750' />
                        <polygon fill='#FFF' points='900 600 810 750 990 750' />
                        <polygon fill='#222' points='900 600 990 450 810 450' />
                        <polygon fill='#DDD' points='0 900 90 750 -90 750' />
                        <polygon fill='#444' points='180 900 270 750 90 750' />
                        <polygon fill='#FFF' points='360 900 450 750 270 750' />
                        <polygon fill='#AAA' points='540 900 630 750 450 750' />
                        <polygon fill='#FFF' points='720 900 810 750 630 750' />
                        <polygon fill='#222' points='900 900 990 750 810 750' />
                        <polygon fill='#222' points='1080 300 990 450 1170 450' />
                        <polygon fill='#FFF' points='1080 300 1170 150 990 150' />
                        <polygon points='1080 600 990 750 1170 750' />
                        <polygon fill='#666' points='1080 600 1170 450 990 450' />
                        <polygon fill='#DDD' points='1080 900 1170 750 990 750' />
                    </g>
                </pattern>
            </defs>
            <rect x='0' y='0' fill='url(#a)' width='100%' height='100%' />
            <rect x='0' y='0' fill='url(#b)' width='100%' height='100%' />
        </svg>
    </div>
    <div class="flex h-screen overflow-hidden relative">

        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64">
                <div class="flex flex-col flex-grow pt-5 overflow-y-auto bg-white ">
                    <div class="flex flex-col flex-shrink-0 px-4">

                        <div class="flex flex-col justify-center items-center space-y-1">
                            <img src="{{ asset('images/logo.png') }}"
                                class="h-24 object-cover ring-2 ring-cyan-800 rounded-full w-24" alt="">
                            <span class="font-semibold  text-lg">{{ auth()->user()->name }}</span>
                            <span class="text-sm text-gray-500">Administrator</span>
                        </div>

                        <button class="hidden rounded-lg focus:outline-none focus:shadow-outline">
                            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-col flex-grow px-4 mt-5">
                        <nav class="flex-1 space-y-1 bg-white">
                            <p class="px-4 pt-4 text-xs font-semibold text-gray-400 uppercase">

                            </p>
                            <ul>
                                <li>
                                    <a class="{{ request()->routeIs('admin.dashboard') ? 'bg-cyan-100 text-cyan-800 fill-cyan-800 scale-95' : '' }} inline-flex items-center w-full px-4 py-3 mt-1 text-medium  text-gray-500 fill-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-cyan-100 hover:scale-95  hover:text-cyan-700 hover:fill-cyan-700"
                                        href="{{ route('admin.dashboard') }}">
                                        {{-- <ion-icon class="w-4 h-4 md hydrated" name="aperture-outline" role="img"
                                            aria-label="aperture outline"></ion-icon> --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="w-6 h-6 md hydrated">
                                            <path
                                                d="M13 21V11H21V21H13ZM3 13V3H11V13H3ZM9 11V5H5V11H9ZM3 21V15H11V21H3ZM5 19H9V17H5V19ZM15 19H19V13H15V19ZM13 3H21V9H13V3ZM15 5V7H19V5H15Z">
                                            </path>
                                        </svg>
                                        <span class="ml-2">
                                            Dashboard
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('admin.room') ? 'bg-cyan-100 text-cyan-800 fill-cyan-800 scale-95' : '' }} inline-flex items-center w-full px-4 py-3 mt-1 text-medium  text-gray-500 fill-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-cyan-100 hover:scale-95  hover:text-cyan-700 hover:fill-cyan-700"
                                        href="{{ route('admin.room') }}">
                                        {{-- <ion-icon class="w-4 h-4 md hydrated" name="aperture-outline" role="img"
                                            aria-label="aperture outline"></ion-icon> --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="w-6 h-6 md hydrated">
                                            <path
                                                d="M13 18.9997H19V9.97791L12 4.53346L5 9.97791V18.9997H11V12.9997H13V18.9997ZM21 19.9997C21 20.552 20.5523 20.9997 20 20.9997H4C3.44772 20.9997 3 20.552 3 19.9997V9.48882C3 9.18023 3.14247 8.88893 3.38606 8.69947L11.3861 2.47725C11.7472 2.19639 12.2528 2.19639 12.6139 2.47725L20.6139 8.69947C20.8575 8.88893 21 9.18023 21 9.48882V19.9997Z">
                                            </path>
                                        </svg>
                                        <span class="ml-2">
                                            Rooms
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('admin.payments') ? 'bg-cyan-100 text-cyan-800 fill-cyan-800 scale-95' : '' }} inline-flex items-center w-full px-4 py-3 mt-1 text-medium  text-gray-500 fill-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-cyan-100 hover:scale-95  hover:text-cyan-700 hover:fill-cyan-700"
                                        href="{{ route('admin.payments') }}">
                                        {{-- <ion-icon class="w-4 h-4 md hydrated" name="aperture-outline" role="img"
                                            aria-label="aperture outline"></ion-icon> --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="w-6 h-6 md hydrated">
                                            <path
                                                d="M22.0049 7H23.0049V17H22.0049V20C22.0049 20.5523 21.5572 21 21.0049 21H3.00488C2.4526 21 2.00488 20.5523 2.00488 20V4C2.00488 3.44772 2.4526 3 3.00488 3H21.0049C21.5572 3 22.0049 3.44772 22.0049 4V7ZM20.0049 17H14.0049C11.2435 17 9.00488 14.7614 9.00488 12C9.00488 9.23858 11.2435 7 14.0049 7H20.0049V5H4.00488V19H20.0049V17ZM21.0049 15V9H14.0049C12.348 9 11.0049 10.3431 11.0049 12C11.0049 13.6569 12.348 15 14.0049 15H21.0049ZM14.0049 11H17.0049V13H14.0049V11Z">
                                            </path>
                                        </svg>
                                        <span class="ml-2">
                                            Payments & Billings
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('admin.guests') ? 'bg-cyan-100 text-cyan-800 fill-cyan-800 scale-95' : '' }} inline-flex items-center w-full px-4 py-3 mt-1 text-medium  text-gray-500 fill-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-cyan-100 hover:scale-95  hover:text-cyan-700 hover:fill-cyan-700"
                                        href="{{ route('admin.guests') }}">
                                        {{-- <ion-icon class="w-4 h-4 md hydrated" name="aperture-outline" role="img"
                                            aria-label="aperture outline"></ion-icon> --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="w-6 h-6 md hydrated">
                                            <path
                                                d="M12.0009 17C15.6633 17 18.8659 18.5751 20.608 20.9247L18.766 21.796C17.3482 20.1157 14.8483 19 12.0009 19C9.15346 19 6.6535 20.1157 5.23577 21.796L3.39453 20.9238C5.13673 18.5747 8.33894 17 12.0009 17ZM12.0009 2C14.7623 2 17.0009 4.23858 17.0009 7V10C17.0009 12.7614 14.7623 15 12.0009 15C9.23945 15 7.00087 12.7614 7.00087 10V7C7.00087 4.23858 9.23945 2 12.0009 2Z">
                                            </path>
                                        </svg>
                                        <span class="ml-2">
                                            Guests
                                        </span>
                                    </a>
                                </li>
                            </ul>

                        </nav>
                    </div>
                    <div class="px-4 pb-5">
                        <ul>

                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="inline-flex items-center w-full px-4 py-3 mt-1 text-medium  text-gray-500 fill-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-red-100 hover:scale-95 hover:text-red-700 hover:fill-red-700"
                                        href="#"
                                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        {{-- <ion-icon class="w-4 h-4 md hydrated" name="aperture-outline" role="img"
                                        aria-label="aperture outline"></ion-icon> --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="w-6 h-6 md hydrated">
                                            <path
                                                d="M5 11H13V13H5V16L0 12L5 8V11ZM3.99927 18H6.70835C8.11862 19.2447 9.97111 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C9.97111 4 8.11862 4.75527 6.70835 6H3.99927C5.82368 3.57111 8.72836 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C8.72836 22 5.82368 20.4289 3.99927 18Z">
                                            </path>
                                        </svg>
                                        <span class="ml-2">
                                            Logout
                                        </span>
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col flex-1 w-0 overflow-hidden">
            <main class="relative flex-1 overflow-y-auto focus:outline-none">
                <div class="py-6">
                    <div class="px-8 ">
                        <!-- === Remove and replace with your own content... === -->
                        <div class="p-8 bg-white relative overflow-hidden rounded-3xl">

                            <header>
                                <h1 class="font-bold text-2xl text-gray-700">Hey <span
                                        class="uppercase">{{ auth()->user()->name }}</span> !!!</h1>

                                <section>
                                    <div class=" mt-3">
                                        <div class=" w-full mx-auto">

                                            <nav class="flex mx-auto " aria-label="Breadcrumb">
                                                <ol role="list" class="flex items-center space-x-1">

                                                    <li>
                                                        <div class="flex items-center">

                                                            <a href="#"
                                                                class="text-sm font-medium text-gray-500 duration-200 hover:text-gray-700 hover:scale-95">Home</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="flex items-center">
                                                            {{-- <ion-icon
                                                                class="flex-shrink-0 w-5 h-5 text-gray-300 md hydrated"
                                                                name="chevron-forward-outline" role="img"
                                                                aria-label="chevron forward outline"></ion-icon> --}}
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="flex-shrink-0 w-5 h-5 fill-gray-500 md hydrated"
                                                                viewBox="0 0 24 24">
                                                                <path
                                                                    d="M13.1714 12.0007L8.22168 7.05093L9.63589 5.63672L15.9999 12.0007L9.63589 18.3646L8.22168 16.9504L13.1714 12.0007Z">
                                                                </path>
                                                            </svg>
                                                            <a href="#"
                                                                class="ml-1 text-sm font-medium text-cyan-700 hover:scale-95 uppercase hover:text-gray-700">@yield('title')</a>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </nav>
                                        </div>

                                    </div>
                                </section>

                            </header>
                            <div class="mt-10 h-full relative">
                                {{ $slot }}
                            </div>
                        </div>
                        <!-- === End ===  -->
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>
