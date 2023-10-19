<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <style>
        [x-cloak] {
            display: none !important;
        }

        .custom-shape-divider-bottom-1695864863 {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            transform: rotate(180deg);
        }

        .custom-shape-divider-bottom-1695864863 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 93px;
        }

        .custom-shape-divider-bottom-1695864863 .shape-fill {
            fill: #ffffff;
        }

        .custom-shape-divider-top-1695878520 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .custom-shape-divider-top-1695878520 svg {
            position: relative;
            display: block;
            width: calc(130% + 1.3px);
            height: 171px;
        }

        .custom-shape-divider-top-1695878520 .shape-fill {
            fill: #FFFFFF;
        }
    </style>
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

<body class="font-sans antialiased">
    <div class="mx-auto relative flex max-w-7xl items-center justify-between py-2 lg:px-8">
        <div class="flex space-x-2 items-center">
            <a href="https://www.facebook.com/southwave.beachhouse.official" target="_blank" class="fill-blue-700">
                <svg version="1.1" id="Icons" class="h-7 w-7" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve">
                    <style type="text/css">
                        .st0 {
                            fill: #FFFFFF;
                        }

                        .st1 {
                            fill: #3A559F;
                        }

                        .st2 {
                            fill: #F4F4F4;
                        }

                        .st3 {
                            fill: #FF0084;
                        }

                        .st4 {
                            fill: #0063DB;
                        }

                        .st5 {
                            fill: #00ACED;
                        }

                        .st6 {
                            fill: #FFEC06;
                        }

                        .st7 {
                            fill: #FF0000;
                        }

                        .st8 {
                            fill: #25D366;
                        }

                        .st9 {
                            fill: #0088FF;
                        }

                        .st10 {
                            fill: #314358;
                        }

                        .st11 {
                            fill: #EE6996;
                        }

                        .st12 {
                            fill: #01AEF3;
                        }

                        .st13 {
                            fill: #FFFEFF;
                        }

                        .st14 {
                            fill: #F06A35;
                        }

                        .st15 {
                            fill: #00ADEF;
                        }

                        .st16 {
                            fill: #1769FF;
                        }

                        .st17 {
                            fill: #1AB7EA;
                        }

                        .st18 {
                            fill: #6001D1;
                        }

                        .st19 {
                            fill: #E41214;
                        }

                        .st20 {
                            fill: #05CE78;
                        }

                        .st21 {
                            fill: #7B519C;
                        }

                        .st22 {
                            fill: #FF4500;
                        }

                        .st23 {
                            fill: #00F076;
                        }

                        .st24 {
                            fill: #FFC900;
                        }

                        .st25 {
                            fill: #00D6FF;
                        }

                        .st26 {
                            fill: #FF3A44;
                        }

                        .st27 {
                            fill: #FF6A36;
                        }

                        .st28 {
                            fill: #0061FE;
                        }

                        .st29 {
                            fill: #F7981C;
                        }

                        .st30 {
                            fill: #EE1B22;
                        }

                        .st31 {
                            fill: #EF3561;
                        }

                        .st32 {
                            fill: none;
                            stroke: #FFFFFF;
                            stroke-width: 2;
                            stroke-miterlimit: 10;
                        }

                        .st33 {
                            fill: #0097D3;
                        }

                        .st34 {
                            fill: #01308A;
                        }

                        .st35 {
                            fill: #019CDE;
                        }

                        .st36 {
                            fill: #FFD049;
                        }

                        .st37 {
                            fill: #16A05D;
                        }

                        .st38 {
                            fill: #4486F4;
                        }

                        .st39 {
                            fill: none;
                        }

                        .st40 {
                            fill: #34A853;
                        }

                        .st41 {
                            fill: #4285F4;
                        }

                        .st42 {
                            fill: #FBBC05;
                        }

                        .st43 {
                            fill: #EA4335;
                        }
                    </style>
                    <path class="st1" d="M23,0H9C4,0,0,4,0,9v14c0,5,4,9,9,9h14c5,0,9-4,9-9V9C32,4,28,0,23,0z" />
                    <path class="st0"
                        d="M26.8,15.4C26.6,15.2,26.3,15,26,15h-5v-3.8c0-0.1,0.1-0.2,0.2-0.2H25c0.6,0,1-0.4,1-1V7c0-0.6-0.4-1-1-1h-4  c-3.3,0-5,2.7-5,6v3h-4c-0.6,0-1,0.4-1,1v3c0,0.6,0.4,1,1,1h4v12h5V20h3c0.4,0,0.8-0.2,0.9-0.6l2-3C27.1,16.1,27,15.7,26.8,15.4z" />
                </svg>
            </a>
            <a href="https://www.instagram.com/southwavebeach/" target="_blank" class="fill-blue-700">
                <svg class="h-7 w-7" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="2" y="2" width="28" height="28" rx="6" fill="url(#paint0_radial_87_7153)" />
                    <rect x="2" y="2" width="28" height="28" rx="6" fill="url(#paint1_radial_87_7153)" />
                    <rect x="2" y="2" width="28" height="28" rx="6" fill="url(#paint2_radial_87_7153)" />
                    <path
                        d="M23 10.5C23 11.3284 22.3284 12 21.5 12C20.6716 12 20 11.3284 20 10.5C20 9.67157 20.6716 9 21.5 9C22.3284 9 23 9.67157 23 10.5Z"
                        fill="white" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M16 21C18.7614 21 21 18.7614 21 16C21 13.2386 18.7614 11 16 11C13.2386 11 11 13.2386 11 16C11 18.7614 13.2386 21 16 21ZM16 19C17.6569 19 19 17.6569 19 16C19 14.3431 17.6569 13 16 13C14.3431 13 13 14.3431 13 16C13 17.6569 14.3431 19 16 19Z"
                        fill="white" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M6 15.6C6 12.2397 6 10.5595 6.65396 9.27606C7.2292 8.14708 8.14708 7.2292 9.27606 6.65396C10.5595 6 12.2397 6 15.6 6H16.4C19.7603 6 21.4405 6 22.7239 6.65396C23.8529 7.2292 24.7708 8.14708 25.346 9.27606C26 10.5595 26 12.2397 26 15.6V16.4C26 19.7603 26 21.4405 25.346 22.7239C24.7708 23.8529 23.8529 24.7708 22.7239 25.346C21.4405 26 19.7603 26 16.4 26H15.6C12.2397 26 10.5595 26 9.27606 25.346C8.14708 24.7708 7.2292 23.8529 6.65396 22.7239C6 21.4405 6 19.7603 6 16.4V15.6ZM15.6 8H16.4C18.1132 8 19.2777 8.00156 20.1779 8.0751C21.0548 8.14674 21.5032 8.27659 21.816 8.43597C22.5686 8.81947 23.1805 9.43139 23.564 10.184C23.7234 10.4968 23.8533 10.9452 23.9249 11.8221C23.9984 12.7223 24 13.8868 24 15.6V16.4C24 18.1132 23.9984 19.2777 23.9249 20.1779C23.8533 21.0548 23.7234 21.5032 23.564 21.816C23.1805 22.5686 22.5686 23.1805 21.816 23.564C21.5032 23.7234 21.0548 23.8533 20.1779 23.9249C19.2777 23.9984 18.1132 24 16.4 24H15.6C13.8868 24 12.7223 23.9984 11.8221 23.9249C10.9452 23.8533 10.4968 23.7234 10.184 23.564C9.43139 23.1805 8.81947 22.5686 8.43597 21.816C8.27659 21.5032 8.14674 21.0548 8.0751 20.1779C8.00156 19.2777 8 18.1132 8 16.4V15.6C8 13.8868 8.00156 12.7223 8.0751 11.8221C8.14674 10.9452 8.27659 10.4968 8.43597 10.184C8.81947 9.43139 9.43139 8.81947 10.184 8.43597C10.4968 8.27659 10.9452 8.14674 11.8221 8.0751C12.7223 8.00156 13.8868 8 15.6 8Z"
                        fill="white" />
                    <defs>
                        <radialGradient id="paint0_radial_87_7153" cx="0" cy="0" r="1"
                            gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(12 23) rotate(-55.3758) scale(25.5196)">
                            <stop stop-color="#B13589" />
                            <stop offset="0.79309" stop-color="#C62F94" />
                            <stop offset="1" stop-color="#8A3AC8" />
                        </radialGradient>
                        <radialGradient id="paint1_radial_87_7153" cx="0" cy="0" r="1"
                            gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(11 31) rotate(-65.1363) scale(22.5942)">
                            <stop stop-color="#E0E8B7" />
                            <stop offset="0.444662" stop-color="#FB8A2E" />
                            <stop offset="0.71474" stop-color="#E2425C" />
                            <stop offset="1" stop-color="#E2425C" stop-opacity="0" />
                        </radialGradient>
                        <radialGradient id="paint2_radial_87_7153" cx="0" cy="0" r="1"
                            gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0.500002 3) rotate(-8.1301) scale(38.8909 8.31836)">
                            <stop offset="0.156701" stop-color="#406ADC" />
                            <stop offset="0.467799" stop-color="#6A45BE" />
                            <stop offset="1" stop-color="#6A45BE" stop-opacity="0" />
                        </radialGradient>
                    </defs>
                </svg>
            </a>
            <a href="https://twitter.com/beach_wave12239" target="_blank" class="fill-blue-700">
                <svg class="h-7 w-7" viewBox="0 -4 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">

                    <title>Twitter-color</title>
                    <desc>Created with Sketch.</desc>
                    <defs>

                    </defs>
                    <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Color-" transform="translate(-300.000000, -164.000000)" fill="#00AAEC">
                            <path
                                d="M348,168.735283 C346.236309,169.538462 344.337383,170.081618 342.345483,170.324305 C344.379644,169.076201 345.940482,167.097147 346.675823,164.739617 C344.771263,165.895269 342.666667,166.736006 340.418384,167.18671 C338.626519,165.224991 336.065504,164 333.231203,164 C327.796443,164 323.387216,168.521488 323.387216,174.097508 C323.387216,174.88913 323.471738,175.657638 323.640782,176.397255 C315.456242,175.975442 308.201444,171.959552 303.341433,165.843265 C302.493397,167.339834 302.008804,169.076201 302.008804,170.925244 C302.008804,174.426869 303.747139,177.518238 306.389857,179.329722 C304.778306,179.280607 303.256911,178.821235 301.9271,178.070061 L301.9271,178.194294 C301.9271,183.08848 305.322064,187.17082 309.8299,188.095341 C309.004402,188.33225 308.133826,188.450704 307.235077,188.450704 C306.601162,188.450704 305.981335,188.390033 305.381229,188.271578 C306.634971,192.28169 310.269414,195.2026 314.580032,195.280607 C311.210424,197.99061 306.961789,199.605634 302.349709,199.605634 C301.555203,199.605634 300.769149,199.559408 300,199.466956 C304.358514,202.327194 309.53689,204 315.095615,204 C333.211481,204 343.114633,188.615385 343.114633,175.270495 C343.114633,174.831347 343.106181,174.392199 343.089276,173.961719 C345.013559,172.537378 346.684275,170.760563 348,168.735283"
                                id="Twitter">

                            </path>
                        </g>
                    </g>
                </svg>
            </a>
        </div>
    </div>
    <div class="relative overflow-hidden bg-gray-800">
        <div class="custom-shape-divider-bottom-1695864863 realtive z-50">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="shape-fill"></path>
            </svg>
        </div>
        <div class="absolute top-0 bottom-0 left-0 w-full h-full">
            <img src="{{ asset('images/bg-cover.jpg') }}" class="object-cover opacity-30" alt="">
        </div>
        <header class=" z-50 relative" x-data="{ open: false }">
            <nav class="mx-auto relative flex max-w-7xl items-center justify-between px-6 py-6 lg:px-8"
                aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img class="h-16 rounded-xl w-auto" src="{{ asset('images/logo.png') }}" alt="">
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="#" class="text-sm font-medium leading-6 text-white">Home</a>
                    <div class="relative">
                        <button type="button" x-on:click="open = !open"
                            class="flex items-center gap-x-1 text-sm font-medium leading-6 text-white"
                            aria-expanded="false">
                            Rooms
                            <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>

                        <!--
                'Product' flyout menu, show/hide based on flyout menu state.

                Entering: "transition ease-out duration-200"
                  From: "opacity-0 translate-y-1"
                  To: "opacity-100 translate-y-0"
                Leaving: "transition ease-in duration-150"
                  From: "opacity-100 translate-y-0"
                  To: "opacity-0 translate-y-1"
              -->
                        <div x-show="open" x-cloak
                            class="absolute -left-8 top-full z-50 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5">
                            <div class="p-4">
                                @forelse (\App\Models\Room::all() as $room)
                                    <div
                                        class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                        <div
                                            class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                            <img src="{{ Storage::url($room->photo_path) }}"
                                                class="h-full w-full object-cover rounded-xl" alt="">
                                        </div>
                                        <div class="flex-auto">
                                            <a href="#" class="block font-semibold text-gray-900">
                                                {{ $room->name }}
                                                <span class="absolute inset-0"></span>
                                            </a>
                                            <p class=" text-gray-600">{{ $room->description }}</p>

                                        </div>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>

                    <a href="#" class="text-sm font-medium leading-6 text-white">Gallery</a>
                    <a href="#location" class="text-sm font-medium leading-6 text-white">Location</a>
                    <a href="#contactUs" class="text-sm font-medium leading-6 text-white">Contact Us</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    {{-- <a href="#"
                        class="font-bold border hover:bg-white hover:text-cyan-700 p-2 px-6 rounded-full leading-6 text-white">Log
                        in <span aria-hidden="true">&rarr;</span></a> --}}
                    <x-button href="{{ route('login') }}" label="Sign In" right-icon="login" white lg outline
                        class="font-semibold hover:text-cyan-700 px-6" rounded />
                </div>
            </nav>
            <!-- Mobile menu, show/hide based on menu open state. -->
            {{-- <div class="lg:hidden" role="dialog" aria-modal="true">
                <!-- Background backdrop, show/hide based on slide-over state. -->
                <div class="fixed inset-0 z-10"></div>
                <div
                    class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div class="flex items-center justify-between">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">Your Company</span>
                            <img class="h-8 w-auto"
                                src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                        </a>
                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <div class="-mx-3">
                                    <button type="button"
                                        class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                                        aria-controls="disclosure-1" aria-expanded="false">
                                        Product
                                        <!--
                        Expand/collapse icon, toggle classes based on menu open state.

                        Open: "rotate-180", Closed: ""
                      -->
                                        <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <!-- 'Product' sub-menu, show/hide based on menu state. -->
                                    <div class="mt-2 space-y-2" id="disclosure-1">
                                        <a href="#"
                                            class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Analytics</a>
                                        <a href="#"
                                            class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Engagement</a>
                                        <a href="#"
                                            class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Security</a>
                                        <a href="#"
                                            class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Integrations</a>
                                        <a href="#"
                                            class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Automations</a>
                                        <a href="#"
                                            class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Watch
                                            demo</a>
                                        <a href="#"
                                            class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Contact
                                            sales</a>
                                    </div>
                                </div>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Features</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Company</a>
                            </div>
                            <div class="py-6">
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log
                                    in</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </header>

        <header class="overflow-hidden  relative bg-gray-100 lg:bg-transparent">
            <div
                class="mx-auto grid max-w-6xl grid-cols-1 grid-rows-[auto_1fr] gap-y-16 py-16 md:py-20 lg:grid-cols-12 lg:gap-y-20 lg:px-3 lg:pb-36 lg:pt-20 xl:py-32">
                <div class="relative flex items-end lg:col-span-5 lg:row-span-2">
                    <div class="relative z-10 flex w-64 mx-auto overflow-hidden md:w-80 lg:w-auto">
                        <img alt="" src="{{ asset('images/dashboard.jpg') }}" decoding="async"
                            data-nimg="future" class="object-cover rounded-2xl w-full h-1/3">
                    </div>
                </div>
                <div class="relative px-4 sm:px-6 lg:col-span-7 lg:pr-0 pb-14 lg:pl-16 xl:pl-20">
                    <div
                        class="hidden lg:absolute lg:bottom-0 lg:-top-32 lg:left-[-100vw] lg:right-[-100vw] lg:block lg:opacity-70 lg:bg-gray-100">
                    </div>
                    <figure class="relative max-w-md mx-auto text-center lg:mx-0 lg:text-left">
                        <div class="flex justify-center text-black lg:justify-start">
                            <div class="flex gap-1">
                                <ion-icon class="w-5 h-5 fill-current md hydrated" name="star" role="img"
                                    aria-label="star"></ion-icon>
                                <ion-icon class="w-5 h-5 fill-current md hydrated" name="star" role="img"
                                    aria-label="star"></ion-icon>
                                <ion-icon class="w-5 h-5 fill-current md hydrated" name="star" role="img"
                                    aria-label="star"></ion-icon>
                                <ion-icon class="w-5 h-5 fill-current md hydrated" name="star" role="img"
                                    aria-label="star"></ion-icon>
                                <ion-icon class="w-5 h-5 fill-current md hydrated" name="star" role="img"
                                    aria-label="star"></ion-icon>
                            </div>
                        </div>
                        <blockquote class="mt-2">
                            <p class="text-xl font-medium lg:text-black">
                                “Here you can write a nice testimonial for your product!”
                            </p>
                        </blockquote>
                        <figcaption class="mt-2 text-sm text-black">
                            <strong class="font-semibold lg:text-black before:content-['—_']">Michael
                                Andreuzza</strong>,
                            Batman
                        </figcaption>
                    </figure>
                </div>
                <div class="pt-16 bg-white lg:col-span-7 lg:bg-transparent lg:pt-0 lg:pl-16 xl:pl-20">
                    <div class="px-4 mx-auto sm:px-6 md:max-w-2xl md:px-4 lg:px-0">
                        <div class="max-w-xl text-center lg:text-left">
                            <div>
                                <p class="text-2xl font-bold tracking-tight text-white sm:text-6xl">
                                    SOUTH WAVE BEACH HOUSE
                                </p>
                                <p class="max-w-xl mt-4 text-lg tracking-tight text-gray-200">
                                    Catch the South Wave Vibe at Our Beach House
                                </p>
                            </div>
                            <div class="bg-white mt-5 z-50 p-2 py-3 rounded-lg flex justify-between items-center">
                                <div>
                                    <x-datetime-picker placeholder="Appointment Date" wire:model.defer="normalPicker"
                                        without-time />
                                </div>
                                <div>
                                    <x-datetime-picker placeholder="Appointment Date" wire:model.defer="normalPicker"
                                        without-time />
                                </div>
                                <div>
                                    <x-button label="BOOK" right-icon="external-link" positive class="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <section class="mt-20 mb-10">
        <div class="mx-auto relative  max-w-7xl  py-2 lg:px-8">
            <header>
                <h1 class="text-3xl font-bold text-cyan-600">OUR ROOMS</h1>
                <div class="h-1 w-20 bg-cyan-600"></div>
            </header>
            <div class="mt-10 flex">
                <main id="page-content" class="flex max-w-full flex-auto flex-col">
                    <div class="">
                        <section class="space-y-6">
                            <nav class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">
                                @forelse (\App\Models\Room::all() as $room)
                                    <a href="javascript:void(0)"
                                        class="aspect-w-16 aspect-h-10 h-64 group relative overflow-hidden rounded-2xl bg-black/25 transition hover:ring-4 hover:ring-cyan-600 active:opacity-75 active:ring-indigo-500/25">
                                        <img class="object-cover" src="{{ Storage::url($room->photo_path) }}" />
                                        <div
                                            class="absolute inset-0 flex flex-col justify-between bg-gradient-to-b from-transparent via-cyan-600/40 to-black">
                                            <div class="flex items-center justify-start space-x-2 p-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="h-8 w-8 fill-red-500">
                                                    <path
                                                        d="M12.001 4.52853C14.35 2.42 17.98 2.49 20.2426 4.75736C22.5053 7.02472 22.583 10.637 20.4786 12.993L11.9999 21.485L3.52138 12.993C1.41705 10.637 1.49571 7.01901 3.75736 4.75736C6.02157 2.49315 9.64519 2.41687 12.001 4.52853Z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="flex items-end justify-between space-x-2 px-4 py-5">
                                                <div class="space-y-1">
                                                    <h3 class="text-2xl font-semibold uppercase text-white">
                                                        {{ $room->name }}
                                                    </h3>
                                                    <p class="text-sm font-semibold text-white">
                                                        &#8369;{{ number_format($room->price, 2) }}</p>
                                                    <p class="text-xs w-64 truncate text-gray-50">
                                                        {{ $room->description }}</p>
                                                </div>
                                                <div
                                                    class="flex h-10 w-10 items-center justify-center rounded-full bg-slate-500/25 text-slate-400 transition group-hover:scale-110 group-hover:bg-cyan-600 group-hover:text-white group-active:scale-100">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" class="h-5 w-5">
                                                        <path
                                                            d="M7 2V22H3V2H7ZM19.0049 2C20.1068 2 21 2.89821 21 3.9908V20.0092C21 21.1087 20.1074 22 19.0049 22H9V2H19.0049ZM15 8L11 12H14V16H16V12H19L15 8ZM24 12V16H22V12H24ZM24 6V10H22V6H24Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @empty
                                @endforelse
                            </nav>
                        </section>

                    </div>
                </main>
            </div>
        </div>
    </section>

    <section class="mx-auto relative mt-20  mb-20 max-w-7xl  py-2 lg:px-8">
        <header>
            <h1 class="text-3xl font-bold text-cyan-600">OUR HOTEL AMENITIES</h1>
            <div class="h-1 w-20 bg-cyan-600"></div>
        </header>
        <div class="mt-10 grid grid-cols-4 gap-6">
            <div
                class="bg-gray-100 h-64 rounded-2xl flex justify-center items-center flex-col space-y-2 group cursor-pointer">
                <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        class="h-20 w-20 fill-cyan-500 group-hover:fill-cyan-800">
                        <path
                            d="M0.689453 6.99659C3.78027 4.49704 7.71526 3 11.9999 3C16.2845 3 20.2195 4.49704 23.3104 6.99659L21.4253 9.33049C18.8496 7.24753 15.5704 6 11.9999 6C8.42937 6 5.15021 7.24753 2.57453 9.33049L0.689453 6.99659ZM3.83124 10.8864C6.0635 9.08119 8.90544 8 11.9999 8C15.0944 8 17.9363 9.08119 20.1686 10.8864L18.2835 13.2203C16.5664 11.8317 14.3803 11 11.9999 11C9.61954 11 7.43344 11.8317 5.71632 13.2203L3.83124 10.8864ZM6.97304 14.7763C8.34673 13.6653 10.0956 13 11.9999 13C13.9042 13 15.6531 13.6653 17.0268 14.7763L15.1417 17.1102C14.2831 16.4158 13.1901 16 11.9999 16C10.8097 16 9.71667 16.4158 8.85811 17.1102L6.97304 14.7763ZM10.1148 18.6661C10.63 18.2495 11.2858 18 11.9999 18C12.714 18 13.3698 18.2495 13.885 18.6661L11.9999 21L10.1148 18.6661Z">
                        </path>
                    </svg></div>
                <span class="font-bold text-gray-700 text-xl">WIFI</span>
                <p class="px-4 text-sm text-center">High speed internet access available.
                    Check email and browse the web.</p>
            </div>
            <div
                class="bg-gray-100 h-64 rounded-2xl flex justify-center items-center flex-col space-y-2 group cursor-pointer">
                <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        class="h-20 w-20 fill-cyan-500 group-hover:fill-cyan-800">
                        <path
                            d="M20 11H19V7H20V4H22V7H23V11H22V18C22 19.6569 20.6569 21 19 21C17.3431 21 16 19.6569 16 18V14H14V19H15V21H2V19H3V4C3 3.44772 3.44772 3 4 3H13C13.5523 3 14 3.44772 14 4V12H16C17.1046 12 18 12.8954 18 14V18C18 18.5523 18.4477 19 19 19C19.5523 19 20 18.5523 20 18V11ZM9 11V7L5 13H8V17L12 11H9Z">
                        </path>
                    </svg></div>
                <span class="font-bold text-gray-700 text-xl">EV CHARGING</span>
                <p class="px-4 text-sm text-center">Four charging stations available
                    located in valet parking. </p>
            </div>
            <div
                class="bg-gray-100 h-64 rounded-2xl flex justify-center items-center flex-col space-y-2 group cursor-pointer">
                <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        class="h-20 w-20 fill-cyan-500 group-hover:fill-cyan-800">
                        <path
                            d="M7.61713 8.71233L10.8222 6.38373C11.174 6.12735 11.6087 5.98543 12.065 6.0008C13.1764 6.02813 14.1524 6.75668 14.4919 7.82036C14.6782 8.40431 14.8481 8.79836 15.0017 9.0025C15.914 10.2155 17.3655 11 19.0002 11V13C16.8255 13 14.8825 12.0083 13.5986 10.4526L12.901 14.4085L14.9621 16.138L17.1853 22.246L15.3059 22.93L13.266 17.3256L9.87576 14.4808C9.32821 14.0382 9.03139 13.3192 9.16231 12.5767L9.67091 9.6923L8.99407 10.1841L6.86706 13.1116L5.24902 11.9361L7.60016 8.7L7.61713 8.71233ZM13.5002 5.5C12.3956 5.5 11.5002 4.60457 11.5002 3.5C11.5002 2.39543 12.3956 1.5 13.5002 1.5C14.6047 1.5 15.5002 2.39543 15.5002 3.5C15.5002 4.60457 14.6047 5.5 13.5002 5.5ZM10.5286 18.6813L7.31465 22.5116L5.78257 21.226L8.75774 17.6803L9.50426 15.5L11.2954 17L10.5286 18.6813Z">
                        </path>
                    </svg></div>
                <span class="font-bold text-gray-700 text-xl">SELF CHECK-IN</span>
                <p class="px-4 text-sm text-center">Check-in using your website
                    or one of our lobby kiosks.
                </p>
            </div>
            <div
                class="bg-gray-100 h-64 rounded-2xl flex justify-center items-center flex-col space-y-2 group cursor-pointer">
                <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        class="h-20 w-20 fill-cyan-500 group-hover:fill-cyan-800">
                        <path
                            d="M7.99837 10.3413L7.99793 12.5352C6.80239 13.2268 5.99805 14.5195 5.99805 16C5.99805 18.2091 7.78891 20 9.99805 20C11.4786 20 12.7712 19.1957 13.4628 18.0001L15.6565 18.0004C14.8327 20.3306 12.6103 22 9.99805 22C6.68434 22 3.99805 19.3137 3.99805 16C3.99805 13.3874 5.66782 11.1649 7.99837 10.3413ZM11.998 17C10.3412 17 8.99805 15.6569 8.99805 14V10C8.99805 8.34315 10.3412 7 11.998 7C13.6549 7 14.998 8.34315 14.998 10V15H16.4319C17.0803 15 17.6849 15.3141 18.0584 15.8362L18.1468 15.971L20.8555 20.4855L19.1406 21.5145L16.4319 17H11.998ZM11.998 2C13.3788 2 14.498 3.11929 14.498 4.5C14.498 5.88071 13.3788 7 11.998 7C10.6173 7 9.49805 5.88071 9.49805 4.5C9.49805 3.11929 10.6173 2 11.998 2Z">
                        </path>
                    </svg></div>
                <span class="font-bold text-gray-700 text-xl">ACCESSIBILITY</span>
                <p class="px-4 text-sm text-center">Accessible parking and
                    hotel rooms available.
                </p>
            </div>
        </div>
    </section>

    <section id = "contactUs">
        <!-- ====== Contact Section Start -->
        <section class="relative z-10 overflow-hidden bg-gray-100 py-20 lg:py-[120px]">
            <div class="container mx-auto">
                <div class="-mx-4 flex flex-wrap lg:justify-between">
                    <div class="w-full px-4 lg:w-1/2 xl:w-6/12">
                        <div class="mb-12 max-w-[570px] lg:mb-0">
                            <span class="text-primary mb-4 block text-base font-semibold">
                                Contact Us
                            </span>
                            <h2
                                class="text-dark mb-6 text-[32px] font-bold uppercase sm:text-[40px] lg:text-[36px] xl:text-[40px]">
                                GET IN TOUCH WITH US
                            </h2>
                            <p class="text-body-color mb-9 text-base leading-relaxed">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim adiqua
                                minim veniam quis nostrud exercitation ullamco
                            </p>
                            <div class="mb-8 flex w-full max-w-[370px]">
                                <div
                                    class="bg-primary text-primary mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-opacity-5 sm:h-[70px] sm:max-w-[70px]">
                                    <svg width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                                        <path
                                            d="M21.8182 24H16.5584C15.3896 24 14.4156 23.0256 14.4156 21.8563V17.5688C14.4156 17.1401 14.0649 16.7893 13.6364 16.7893H10.4026C9.97403 16.7893 9.62338 17.1401 9.62338 17.5688V21.8173C9.62338 22.9866 8.64935 23.961 7.48052 23.961H2.14286C0.974026 23.961 0 22.9866 0 21.8173V8.21437C0 7.62972 0.311688 7.08404 0.818182 6.77223L11.1039 0.263094C11.6494 -0.0876979 12.3896 -0.0876979 12.9351 0.263094L23.2208 6.77223C23.7273 7.08404 24 7.62972 24 8.21437V21.7783C24 23.0256 23.026 24 21.8182 24ZM10.3636 15.4251H13.5974C14.7662 15.4251 15.7403 16.3995 15.7403 17.5688V21.8173C15.7403 22.246 16.0909 22.5968 16.5195 22.5968H21.8182C22.2468 22.5968 22.5974 22.246 22.5974 21.8173V8.25335C22.5974 8.13642 22.5195 8.01949 22.4416 7.94153L12.1948 1.4324C12.0779 1.35445 11.9221 1.35445 11.8442 1.4324L1.55844 7.94153C1.44156 8.01949 1.4026 8.13642 1.4026 8.25335V21.8563C1.4026 22.285 1.75325 22.6358 2.18182 22.6358H7.48052C7.90909 22.6358 8.25974 22.285 8.25974 21.8563V17.5688C8.22078 16.3995 9.19481 15.4251 10.3636 15.4251Z" />
                                    </svg>
                                </div>
                                <div class="w-full">
                                    <h4 class="text-dark mb-1 text-xl font-bold">Our Location</h4>
                                    <p class="text-body-color text-base">
                                        National Circumferential Road Brgy, Mabini, 4202 Batangas
                                    </p>
                                </div>
                            </div>
                            <div class="mb-8 flex w-full max-w-[370px]">
                                <div
                                    class="bg-primary text-primary mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-opacity-5 sm:h-[70px] sm:max-w-[70px]">
                                    <svg width="24" height="26" viewBox="0 0 24 26" class="fill-current">
                                        <path
                                            d="M22.6149 15.1386C22.5307 14.1704 21.7308 13.4968 20.7626 13.4968H2.82869C1.86042 13.4968 1.10265 14.2125 0.97636 15.1386L0.092295 23.9793C0.0501967 24.4845 0.21859 25.0317 0.555377 25.4106C0.892163 25.7895 1.39734 26 1.94462 26H21.6887C22.1939 26 22.6991 25.7895 23.078 25.4106C23.4148 25.0317 23.5832 24.5266 23.5411 23.9793L22.6149 15.1386ZM21.9413 24.4424C21.8992 24.4845 21.815 24.5687 21.6466 24.5687H1.94462C1.81833 24.5687 1.69203 24.4845 1.64993 24.4424C1.60783 24.4003 1.52364 24.3161 1.56574 24.1477L2.4498 15.2649C2.4498 15.0544 2.61819 14.9281 2.82869 14.9281H20.8047C21.0152 14.9281 21.1415 15.0544 21.1835 15.2649L22.0676 24.1477C22.0255 24.274 21.9834 24.4003 21.9413 24.4424Z" />
                                        <path
                                            d="M11.7965 16.7805C10.1547 16.7805 8.84961 18.0855 8.84961 19.7273C8.84961 21.3692 10.1547 22.6742 11.7965 22.6742C13.4383 22.6742 14.7434 21.3692 14.7434 19.7273C14.7434 18.0855 13.4383 16.7805 11.7965 16.7805ZM11.7965 21.2008C10.9966 21.2008 10.3231 20.5272 10.3231 19.7273C10.3231 18.9275 10.9966 18.2539 11.7965 18.2539C12.5964 18.2539 13.2699 18.9275 13.2699 19.7273C13.2699 20.5272 12.5964 21.2008 11.7965 21.2008Z" />
                                        <path
                                            d="M1.10265 7.85562C1.18684 9.70794 2.82868 10.4657 3.67064 10.4657H6.61752C6.65962 10.4657 6.65962 10.4657 6.65962 10.4657C7.92257 10.3815 9.18552 9.53955 9.18552 7.85562V6.84526C10.5748 6.84526 13.7742 6.84526 15.1635 6.84526V7.85562C15.1635 9.53955 16.4264 10.3815 17.6894 10.4657H17.7315H20.6363C21.4782 10.4657 23.1201 9.70794 23.2043 7.85562C23.2043 7.72932 23.2043 7.26624 23.2043 6.84526C23.2043 6.50847 23.2043 6.21378 23.2043 6.17169C23.2043 6.12959 23.2043 6.08749 23.2043 6.08749C23.078 4.90874 22.657 3.94047 21.9413 3.18271L21.8992 3.14061C20.8468 2.17235 19.5838 1.62507 18.6155 1.28828C15.795 0.193726 12.2587 0.193726 12.0903 0.193726C9.6065 0.235824 8.00677 0.446315 5.60716 1.28828C4.681 1.58297 3.41805 2.13025 2.36559 3.09851L2.3235 3.14061C1.60782 3.89838 1.18684 4.86664 1.06055 6.04539C1.06055 6.08749 1.06055 6.12959 1.06055 6.12959C1.06055 6.21378 1.06055 6.46637 1.06055 6.80316C1.10265 7.18204 1.10265 7.68722 1.10265 7.85562ZM3.37595 4.15097C4.21792 3.3932 5.27038 2.93012 6.15444 2.59333C8.34355 1.79346 9.7749 1.62507 12.1745 1.58297C12.3429 1.58297 15.6266 1.62507 18.1525 2.59333C19.0365 2.93012 20.089 3.3511 20.931 4.15097C21.394 4.65615 21.6887 5.32972 21.7729 6.12959C21.7729 6.25588 21.7729 6.46637 21.7729 6.80316C21.7729 7.22414 21.7729 7.68722 21.7729 7.81352C21.7308 8.78178 20.8047 8.99227 20.6784 8.99227H17.7736C17.3526 8.95017 16.679 8.78178 16.679 7.85562V6.12959C16.679 5.7928 16.4685 5.54021 16.1738 5.41392C15.9213 5.32972 8.55405 5.32972 8.30146 5.41392C8.00677 5.49811 7.79628 5.7928 7.79628 6.12959V7.85562C7.79628 8.78178 7.1227 8.95017 6.70172 8.99227H3.79694C3.67064 8.99227 2.74448 8.78178 2.70238 7.81352C2.70238 7.68722 2.70238 7.22414 2.70238 6.80316C2.70238 6.46637 2.70238 6.29798 2.70238 6.17169C2.61818 5.32972 2.91287 4.65615 3.37595 4.15097Z" />
                                    </svg>
                                </div>
                                <div class="w-full">
                                    <h4 class="text-dark mb-1 text-xl font-bold">Phone Number</h4>
                                    <p class="text-body-color text-base">(+62)81 414 257 9980</p>
                                </div>
                            </div>
                            <div class="mb-8 flex w-full max-w-[370px]">
                                <div
                                    class="bg-primary text-primary mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-opacity-5 sm:h-[70px] sm:max-w-[70px]">
                                    <svg width="28" height="19" viewBox="0 0 28 19" class="fill-current">
                                        <path
                                            d="M25.3636 0H2.63636C1.18182 0 0 1.16785 0 2.6052V16.3948C0 17.8322 1.18182 19 2.63636 19H25.3636C26.8182 19 28 17.8322 28 16.3948V2.6052C28 1.16785 26.8182 0 25.3636 0ZM25.3636 1.5721C25.5909 1.5721 25.7727 1.61702 25.9545 1.75177L14.6364 8.53428C14.2273 8.75886 13.7727 8.75886 13.3636 8.53428L2.04545 1.75177C2.22727 1.66194 2.40909 1.5721 2.63636 1.5721H25.3636ZM25.3636 17.383H2.63636C2.09091 17.383 1.59091 16.9338 1.59091 16.3499V3.32388L12.5 9.8818C12.9545 10.1513 13.4545 10.2861 13.9545 10.2861C14.4545 10.2861 14.9545 10.1513 15.4091 9.8818L26.3182 3.32388V16.3499C26.4091 16.9338 25.9091 17.383 25.3636 17.383Z" />
                                    </svg>
                                </div>
                                <div class="w-full">
                                    <h4 class="text-dark mb-1 text-xl font-bold">Email Address</h4>
                                    <p class="text-body-color text-base">southwavebeach@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
                        <div class="relative rounded-lg bg-white p-8 shadow-lg sm:p-12">
                            <form>
                                <div class="mb-6">
                                    <input type="text" placeholder="Your Name"
                                        class="text-body-color border-[f0f0f0] focus:border-primary w-full rounded border py-3 px-[14px] text-base outline-none focus-visible:shadow-none" />
                                </div>
                                <div class="mb-6">
                                    <input type="email" placeholder="Your Email"
                                        class="text-body-color border-[f0f0f0] focus:border-primary w-full rounded border py-3 px-[14px] text-base outline-none focus-visible:shadow-none" />
                                </div>
                                <div class="mb-6">
                                    <input type="text" placeholder="Your Phone"
                                        class="text-body-color border-[f0f0f0] focus:border-primary w-full rounded border py-3 px-[14px] text-base outline-none focus-visible:shadow-none" />
                                </div>
                                <div class="mb-6">
                                    <textarea rows="6" placeholder="Your Message"
                                        class="text-body-color border-[f0f0f0] focus:border-primary w-full resize-none rounded border py-3 px-[14px] text-base outline-none focus-visible:shadow-none"></textarea>
                                </div>
                                <div>
                                    <button type="submit"
                                        class="bg-primary border-primary w-full rounded border p-3 text-white transition hover:bg-opacity-90">
                                        Send Message
                                    </button>
                                </div>
                            </form>
                            <div>
                                <span class="absolute -top-10 -right-9 z-[-1]">
                                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 100C0 44.7715 0 0 0 0C55.2285 0 100 44.7715 100 100C100 100 100 100 0 100Z"
                                            fill="#3056D3" />
                                    </svg>
                                </span>
                                <span class="absolute -right-10 top-[90px] z-[-1]">
                                    <svg width="34" height="134" viewBox="0 0 34 134" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="31.9993" cy="132" r="1.66667"
                                            transform="rotate(180 31.9993 132)" fill="#13C296" />
                                        <circle cx="31.9993" cy="117.333" r="1.66667"
                                            transform="rotate(180 31.9993 117.333)" fill="#13C296" />
                                        <circle cx="31.9993" cy="102.667" r="1.66667"
                                            transform="rotate(180 31.9993 102.667)" fill="#13C296" />
                                        <circle cx="31.9993" cy="88" r="1.66667"
                                            transform="rotate(180 31.9993 88)" fill="#13C296" />
                                        <circle cx="31.9993" cy="73.3333" r="1.66667"
                                            transform="rotate(180 31.9993 73.3333)" fill="#13C296" />
                                        <circle cx="31.9993" cy="45" r="1.66667"
                                            transform="rotate(180 31.9993 45)" fill="#13C296" />
                                        <circle cx="31.9993" cy="16" r="1.66667"
                                            transform="rotate(180 31.9993 16)" fill="#13C296" />
                                        <circle cx="31.9993" cy="59" r="1.66667"
                                            transform="rotate(180 31.9993 59)" fill="#13C296" />
                                        <circle cx="31.9993" cy="30.6666" r="1.66667"
                                            transform="rotate(180 31.9993 30.6666)" fill="#13C296" />
                                        <circle cx="31.9993" cy="1.66665" r="1.66667"
                                            transform="rotate(180 31.9993 1.66665)" fill="#13C296" />
                                        <circle cx="17.3333" cy="132" r="1.66667"
                                            transform="rotate(180 17.3333 132)" fill="#13C296" />
                                        <circle cx="17.3333" cy="117.333" r="1.66667"
                                            transform="rotate(180 17.3333 117.333)" fill="#13C296" />
                                        <circle cx="17.3333" cy="102.667" r="1.66667"
                                            transform="rotate(180 17.3333 102.667)" fill="#13C296" />
                                        <circle cx="17.3333" cy="88" r="1.66667"
                                            transform="rotate(180 17.3333 88)" fill="#13C296" />
                                        <circle cx="17.3333" cy="73.3333" r="1.66667"
                                            transform="rotate(180 17.3333 73.3333)" fill="#13C296" />
                                        <circle cx="17.3333" cy="45" r="1.66667"
                                            transform="rotate(180 17.3333 45)" fill="#13C296" />
                                        <circle cx="17.3333" cy="16" r="1.66667"
                                            transform="rotate(180 17.3333 16)" fill="#13C296" />
                                        <circle cx="17.3333" cy="59" r="1.66667"
                                            transform="rotate(180 17.3333 59)" fill="#13C296" />
                                        <circle cx="17.3333" cy="30.6666" r="1.66667"
                                            transform="rotate(180 17.3333 30.6666)" fill="#13C296" />
                                        <circle cx="17.3333" cy="1.66665" r="1.66667"
                                            transform="rotate(180 17.3333 1.66665)" fill="#13C296" />
                                        <circle cx="2.66536" cy="132" r="1.66667"
                                            transform="rotate(180 2.66536 132)" fill="#13C296" />
                                        <circle cx="2.66536" cy="117.333" r="1.66667"
                                            transform="rotate(180 2.66536 117.333)" fill="#13C296" />
                                        <circle cx="2.66536" cy="102.667" r="1.66667"
                                            transform="rotate(180 2.66536 102.667)" fill="#13C296" />
                                        <circle cx="2.66536" cy="88" r="1.66667"
                                            transform="rotate(180 2.66536 88)" fill="#13C296" />
                                        <circle cx="2.66536" cy="73.3333" r="1.66667"
                                            transform="rotate(180 2.66536 73.3333)" fill="#13C296" />
                                        <circle cx="2.66536" cy="45" r="1.66667"
                                            transform="rotate(180 2.66536 45)" fill="#13C296" />
                                        <circle cx="2.66536" cy="16" r="1.66667"
                                            transform="rotate(180 2.66536 16)" fill="#13C296" />
                                        <circle cx="2.66536" cy="59" r="1.66667"
                                            transform="rotate(180 2.66536 59)" fill="#13C296" />
                                        <circle cx="2.66536" cy="30.6666" r="1.66667"
                                            transform="rotate(180 2.66536 30.6666)" fill="#13C296" />
                                        <circle cx="2.66536" cy="1.66665" r="1.66667"
                                            transform="rotate(180 2.66536 1.66665)" fill="#13C296" />
                                    </svg>
                                </span>
                                <span class="absolute -left-7 -bottom-7 z-[-1]">
                                    <svg width="107" height="134" viewBox="0 0 107 134" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="104.999" cy="132" r="1.66667"
                                            transform="rotate(180 104.999 132)" fill="#13C296" />
                                        <circle cx="104.999" cy="117.333" r="1.66667"
                                            transform="rotate(180 104.999 117.333)" fill="#13C296" />
                                        <circle cx="104.999" cy="102.667" r="1.66667"
                                            transform="rotate(180 104.999 102.667)" fill="#13C296" />
                                        <circle cx="104.999" cy="88" r="1.66667"
                                            transform="rotate(180 104.999 88)" fill="#13C296" />
                                        <circle cx="104.999" cy="73.3333" r="1.66667"
                                            transform="rotate(180 104.999 73.3333)" fill="#13C296" />
                                        <circle cx="104.999" cy="45" r="1.66667"
                                            transform="rotate(180 104.999 45)" fill="#13C296" />
                                        <circle cx="104.999" cy="16" r="1.66667"
                                            transform="rotate(180 104.999 16)" fill="#13C296" />
                                        <circle cx="104.999" cy="59" r="1.66667"
                                            transform="rotate(180 104.999 59)" fill="#13C296" />
                                        <circle cx="104.999" cy="30.6666" r="1.66667"
                                            transform="rotate(180 104.999 30.6666)" fill="#13C296" />
                                        <circle cx="104.999" cy="1.66665" r="1.66667"
                                            transform="rotate(180 104.999 1.66665)" fill="#13C296" />
                                        <circle cx="90.3333" cy="132" r="1.66667"
                                            transform="rotate(180 90.3333 132)" fill="#13C296" />
                                        <circle cx="90.3333" cy="117.333" r="1.66667"
                                            transform="rotate(180 90.3333 117.333)" fill="#13C296" />
                                        <circle cx="90.3333" cy="102.667" r="1.66667"
                                            transform="rotate(180 90.3333 102.667)" fill="#13C296" />
                                        <circle cx="90.3333" cy="88" r="1.66667"
                                            transform="rotate(180 90.3333 88)" fill="#13C296" />
                                        <circle cx="90.3333" cy="73.3333" r="1.66667"
                                            transform="rotate(180 90.3333 73.3333)" fill="#13C296" />
                                        <circle cx="90.3333" cy="45" r="1.66667"
                                            transform="rotate(180 90.3333 45)" fill="#13C296" />
                                        <circle cx="90.3333" cy="16" r="1.66667"
                                            transform="rotate(180 90.3333 16)" fill="#13C296" />
                                        <circle cx="90.3333" cy="59" r="1.66667"
                                            transform="rotate(180 90.3333 59)" fill="#13C296" />
                                        <circle cx="90.3333" cy="30.6666" r="1.66667"
                                            transform="rotate(180 90.3333 30.6666)" fill="#13C296" />
                                        <circle cx="90.3333" cy="1.66665" r="1.66667"
                                            transform="rotate(180 90.3333 1.66665)" fill="#13C296" />
                                        <circle cx="75.6654" cy="132" r="1.66667"
                                            transform="rotate(180 75.6654 132)" fill="#13C296" />
                                        <circle cx="31.9993" cy="132" r="1.66667"
                                            transform="rotate(180 31.9993 132)" fill="#13C296" />
                                        <circle cx="75.6654" cy="117.333" r="1.66667"
                                            transform="rotate(180 75.6654 117.333)" fill="#13C296" />
                                        <circle cx="31.9993" cy="117.333" r="1.66667"
                                            transform="rotate(180 31.9993 117.333)" fill="#13C296" />
                                        <circle cx="75.6654" cy="102.667" r="1.66667"
                                            transform="rotate(180 75.6654 102.667)" fill="#13C296" />
                                        <circle cx="31.9993" cy="102.667" r="1.66667"
                                            transform="rotate(180 31.9993 102.667)" fill="#13C296" />
                                        <circle cx="75.6654" cy="88" r="1.66667"
                                            transform="rotate(180 75.6654 88)" fill="#13C296" />
                                        <circle cx="31.9993" cy="88" r="1.66667"
                                            transform="rotate(180 31.9993 88)" fill="#13C296" />
                                        <circle cx="75.6654" cy="73.3333" r="1.66667"
                                            transform="rotate(180 75.6654 73.3333)" fill="#13C296" />
                                        <circle cx="31.9993" cy="73.3333" r="1.66667"
                                            transform="rotate(180 31.9993 73.3333)" fill="#13C296" />
                                        <circle cx="75.6654" cy="45" r="1.66667"
                                            transform="rotate(180 75.6654 45)" fill="#13C296" />
                                        <circle cx="31.9993" cy="45" r="1.66667"
                                            transform="rotate(180 31.9993 45)" fill="#13C296" />
                                        <circle cx="75.6654" cy="16" r="1.66667"
                                            transform="rotate(180 75.6654 16)" fill="#13C296" />
                                        <circle cx="31.9993" cy="16" r="1.66667"
                                            transform="rotate(180 31.9993 16)" fill="#13C296" />
                                        <circle cx="75.6654" cy="59" r="1.66667"
                                            transform="rotate(180 75.6654 59)" fill="#13C296" />
                                        <circle cx="31.9993" cy="59" r="1.66667"
                                            transform="rotate(180 31.9993 59)" fill="#13C296" />
                                        <circle cx="75.6654" cy="30.6666" r="1.66667"
                                            transform="rotate(180 75.6654 30.6666)" fill="#13C296" />
                                        <circle cx="31.9993" cy="30.6666" r="1.66667"
                                            transform="rotate(180 31.9993 30.6666)" fill="#13C296" />
                                        <circle cx="75.6654" cy="1.66665" r="1.66667"
                                            transform="rotate(180 75.6654 1.66665)" fill="#13C296" />
                                        <circle cx="31.9993" cy="1.66665" r="1.66667"
                                            transform="rotate(180 31.9993 1.66665)" fill="#13C296" />
                                        <circle cx="60.9993" cy="132" r="1.66667"
                                            transform="rotate(180 60.9993 132)" fill="#13C296" />
                                        <circle cx="17.3333" cy="132" r="1.66667"
                                            transform="rotate(180 17.3333 132)" fill="#13C296" />
                                        <circle cx="60.9993" cy="117.333" r="1.66667"
                                            transform="rotate(180 60.9993 117.333)" fill="#13C296" />
                                        <circle cx="17.3333" cy="117.333" r="1.66667"
                                            transform="rotate(180 17.3333 117.333)" fill="#13C296" />
                                        <circle cx="60.9993" cy="102.667" r="1.66667"
                                            transform="rotate(180 60.9993 102.667)" fill="#13C296" />
                                        <circle cx="17.3333" cy="102.667" r="1.66667"
                                            transform="rotate(180 17.3333 102.667)" fill="#13C296" />
                                        <circle cx="60.9993" cy="88" r="1.66667"
                                            transform="rotate(180 60.9993 88)" fill="#13C296" />
                                        <circle cx="17.3333" cy="88" r="1.66667"
                                            transform="rotate(180 17.3333 88)" fill="#13C296" />
                                        <circle cx="60.9993" cy="73.3333" r="1.66667"
                                            transform="rotate(180 60.9993 73.3333)" fill="#13C296" />
                                        <circle cx="17.3333" cy="73.3333" r="1.66667"
                                            transform="rotate(180 17.3333 73.3333)" fill="#13C296" />
                                        <circle cx="60.9993" cy="45" r="1.66667"
                                            transform="rotate(180 60.9993 45)" fill="#13C296" />
                                        <circle cx="17.3333" cy="45" r="1.66667"
                                            transform="rotate(180 17.3333 45)" fill="#13C296" />
                                        <circle cx="60.9993" cy="16" r="1.66667"
                                            transform="rotate(180 60.9993 16)" fill="#13C296" />
                                        <circle cx="17.3333" cy="16" r="1.66667"
                                            transform="rotate(180 17.3333 16)" fill="#13C296" />
                                        <circle cx="60.9993" cy="59" r="1.66667"
                                            transform="rotate(180 60.9993 59)" fill="#13C296" />
                                        <circle cx="17.3333" cy="59" r="1.66667"
                                            transform="rotate(180 17.3333 59)" fill="#13C296" />
                                        <circle cx="60.9993" cy="30.6666" r="1.66667"
                                            transform="rotate(180 60.9993 30.6666)" fill="#13C296" />
                                        <circle cx="17.3333" cy="30.6666" r="1.66667"
                                            transform="rotate(180 17.3333 30.6666)" fill="#13C296" />
                                        <circle cx="60.9993" cy="1.66665" r="1.66667"
                                            transform="rotate(180 60.9993 1.66665)" fill="#13C296" />
                                        <circle cx="17.3333" cy="1.66665" r="1.66667"
                                            transform="rotate(180 17.3333 1.66665)" fill="#13C296" />
                                        <circle cx="46.3333" cy="132" r="1.66667"
                                            transform="rotate(180 46.3333 132)" fill="#13C296" />
                                        <circle cx="2.66536" cy="132" r="1.66667"
                                            transform="rotate(180 2.66536 132)" fill="#13C296" />
                                        <circle cx="46.3333" cy="117.333" r="1.66667"
                                            transform="rotate(180 46.3333 117.333)" fill="#13C296" />
                                        <circle cx="2.66536" cy="117.333" r="1.66667"
                                            transform="rotate(180 2.66536 117.333)" fill="#13C296" />
                                        <circle cx="46.3333" cy="102.667" r="1.66667"
                                            transform="rotate(180 46.3333 102.667)" fill="#13C296" />
                                        <circle cx="2.66536" cy="102.667" r="1.66667"
                                            transform="rotate(180 2.66536 102.667)" fill="#13C296" />
                                        <circle cx="46.3333" cy="88" r="1.66667"
                                            transform="rotate(180 46.3333 88)" fill="#13C296" />
                                        <circle cx="2.66536" cy="88" r="1.66667"
                                            transform="rotate(180 2.66536 88)" fill="#13C296" />
                                        <circle cx="46.3333" cy="73.3333" r="1.66667"
                                            transform="rotate(180 46.3333 73.3333)" fill="#13C296" />
                                        <circle cx="2.66536" cy="73.3333" r="1.66667"
                                            transform="rotate(180 2.66536 73.3333)" fill="#13C296" />
                                        <circle cx="46.3333" cy="45" r="1.66667"
                                            transform="rotate(180 46.3333 45)" fill="#13C296" />
                                        <circle cx="2.66536" cy="45" r="1.66667"
                                            transform="rotate(180 2.66536 45)" fill="#13C296" />
                                        <circle cx="46.3333" cy="16" r="1.66667"
                                            transform="rotate(180 46.3333 16)" fill="#13C296" />
                                        <circle cx="2.66536" cy="16" r="1.66667"
                                            transform="rotate(180 2.66536 16)" fill="#13C296" />
                                        <circle cx="46.3333" cy="59" r="1.66667"
                                            transform="rotate(180 46.3333 59)" fill="#13C296" />
                                        <circle cx="2.66536" cy="59" r="1.66667"
                                            transform="rotate(180 2.66536 59)" fill="#13C296" />
                                        <circle cx="46.3333" cy="30.6666" r="1.66667"
                                            transform="rotate(180 46.3333 30.6666)" fill="#13C296" />
                                        <circle cx="2.66536" cy="30.6666" r="1.66667"
                                            transform="rotate(180 2.66536 30.6666)" fill="#13C296" />
                                        <circle cx="46.3333" cy="1.66665" r="1.66667"
                                            transform="rotate(180 46.3333 1.66665)" fill="#13C296" />
                                        <circle cx="2.66536" cy="1.66665" r="1.66667"
                                            transform="rotate(180 2.66536 1.66665)" fill="#13C296" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== Contact Section End -->

    </section>

    <section id="location" class="mx-auto relative mt-20  mb-20 max-w-7xl  py-2 lg:px-8">

        <iframe class="w-full"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.7823737806298!2d120.88406407587233!3d13.731621597758835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bda950bd92a665%3A0xe59ef3265455652c!2sSouth%20Wave%20Beach%20House!5e0!3m2!1sen!2sph!4v1695888254830!5m2!1sen!2sph"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <footer class="bg-gray-800 border-gray-200 overflow-hidden relative">
        <div class="absolute top-0 bottom-0 h-full w-full">
            <img src="{{ asset('images/footerbg.jpg') }}" class="object-cover opacity-30" alt="">
        </div>
        <div class="custom-shape-divider-top-1695878520 z-10">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="shape-fill"></path>
            </svg>
        </div>
        <div class="px-4  mx-auto max-w-7xl relative  pt-20 sm:px-6 lg:px-16">
            <div class="flex flex-col items-start justify-between pt-16  gap-y-12 lg:flex-row lg:items-center">
                <div>
                    <div class="flex items-center text-black">
                        <div>
                            <p class="font-semibold text-3xl leading-6 text-white uppercase">
                                SOUTH WAVE BEACH HOUSE
                            </p>

                        </div>
                    </div>
                    <nav class="flex gap-8 mt-11">
                        <a class="relative -my-2 -mx-3 rounded-lg px-3 py-2 text-sm text-white hover:text-blue-600 transition-colors delay-150 hover:delay-[0ms]"
                            href="#"><span class="relative z-10">Alpine</span></a><a
                            class="relative -my-2 -mx-3 rounded-lg px-3 py-2 text-sm text-white hover:text-blue-600 transition-colors delay-150 hover:delay-[0ms]"
                            href="#"><span class="relative z-10">Nextjs</span></a><a
                            class="relative -my-2 -mx-3 rounded-lg px-3 py-2 text-sm text-white hover:text-blue-600 transition-colors delay-150 hover:delay-[0ms]"
                            href="#"><span class="relative z-10">Tailwind</span></a><a
                            class="relative -my-2 -mx-3 rounded-lg px-3 py-2 text-sm text-white hover:text-blue-600 transition-colors delay-150 hover:delay-[0ms]"
                            href="#"><span class="relative z-10">FAQs</span></a>
                    </nav>
                </div>
                <div
                    class="relative mb-2 flex items-center self-stretch p-4 -mx-4 transition-colors group hover:bg-gray-100 sm:self-auto sm:rounded-2xl lg:mx-0 lg:self-auto lg:p-6">
                    <div class="relative flex items-center justify-center flex-none  rounded-xl">
                        <img src="{{ asset('images/logo.png') }}" class="h-16 rounded" alt="">
                    </div>
                    <div class="ml-8 lg:w-64">
                        <p class="text-base font-semibold text-gray-300 group-hover:text-black">
                            <a href="#"><span class="absolute inset-0 sm:rounded-2xl"></span>Stay
                                updated</a>
                        </p>
                        <p class="mt-1 text-sm group-hover:text-gray-800 text-white hover:text-blue-600">
                            Follow us for social media for news and updates
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="flex flex-col items-center pt-8 pb-8 border-t border-gray-200 md:flex-row-reverse md:justify-between md:pt-6">
                <div class="max-w-xl">
                    <form class="flex flex-col items-center justify-center max-w-sm mx-auto" action="">
                        <div class="flex flex-col w-full gap-1 mt-3 sm:flex-row">
                            <input name="email" type="email"
                                class="block w-full px-4 py-2 text-sm font-medium text-gray-800 placeholder-gray-400 bg-white border border-gray-300 rounded-full font-spline focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-600/50 disabled:opacity-50"
                                placeholder="Enter your email..." required=""><button type="button"
                                class="items-center inline-flex  justify-center w-full px-6 py-2.5 text-center text-white duration-200 bg-black border-2 border-black rounded-full nline-flex hover:bg-transparent hover:border-black hover:text-black focus:outline-none lg:w-auto focus-visible:outline-black text-sm focus-visible:ring-black">
                                <div style="position: relative"></div>
                                Subscribe<!-- -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true" class="w-4 h-auto ml-2">
                                    <path fill-rule="evenodd"
                                        d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
                <p class="mt-6 text-sm text-white md:mt-0">
                    © Copyright
                    <!-- -->2022
                    <!-- -->. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

</body>

</html>
