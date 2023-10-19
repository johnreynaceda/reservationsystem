<div x-data="{ book_modal: @entangle('reservation_modal') }">
    <div class="relative overflow-hidden bg-gray-800">
        <div class="custom-shape-divider-bottom-1695864863 realtive z-10">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
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
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
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
                    {{-- <x-button href="{{ route('login') }}" label="Sign In" right-icon="login" white lg outline
                        class="font-semibold hover:text-cyan-700 px-6" rounded /> --}}
                    <x-dropdown>
                        <x-slot name="trigger">
                            <x-avatar lg label="{{ substr(auth()->user()->name, 0, 2) }}" class="uppercase" />
                        </x-slot>

                        <x-dropdown.item label="Help Center" />
                        <x-dropdown.item separator label="Live Chat" />
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown.item separator
                                onclick="event.preventDefault();
                            this.closest('form').submit();"
                                label="Logout" />
                        </form>
                    </x-dropdown>
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
                <div wire:ignore class="pt-16 bg-white lg:col-span-7 lg:bg-transparent lg:pt-0 lg:pl-16 xl:pl-20">
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
                                    <x-datetime-picker placeholder="Date From" wire:model="datefrom" />
                                </div>
                                <div>
                                    <x-datetime-picker placeholder="Date To" wire:model="dateto" />
                                </div>
                                <div>
                                    <x-button label="BOOK" wire:click="bookNow" right-icon="external-link" positive
                                        class="" />
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
                                    <div wire:click="selectRoom({{ $room->id }})"
                                        class="aspect-w-16 cursor-pointer aspect-h-10 h-64 group relative overflow-hidden rounded-2xl bg-black/25 transition hover:ring-4 hover:ring-cyan-600 active:opacity-75 active:ring-indigo-500/25">
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
                                    </div>
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

    <section class="mx-auto relative mt-20  mb-20 max-w-7xl  py-2 lg:px-8">

        <iframe class="w-full"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.7823737806298!2d120.88406407587233!3d13.731621597758835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bda950bd92a665%3A0xe59ef3265455652c!2sSouth%20Wave%20Beach%20House!5e0!3m2!1sen!2sph!4v1695888254830!5m2!1sen!2sph"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <div x-show="book_modal" x-cloak x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="relative z-10"
        aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <!--
          Background backdrop, show/hide based on modal state.

          Entering: "ease-out duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "ease-in duration-200"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <div class="fixed inset-0 bg-gray-500 opacity-75 transition-opacity">
        </div>

        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <!--
              Modal panel, show/hide based on modal state.

              Entering: "ease-out duration-300"
                From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                To: "opacity-100 translate-y-0 sm:scale-100"
              Leaving: "ease-in duration-200"
                From: "opacity-100 translate-y-0 sm:scale-100"
                To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            -->
                <div x-show="book_modal" x-cloak x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100""
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    class="relative transform  rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-5xl">
                    <div class="bg-white px-4 pb-4 pt-5 sm:p-10 sm:pb-4">
                        <div>
                            <div class="flex space-x-2 items-center fill-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6">
                                    <path
                                        d="M21 19.9997C21 20.552 20.5523 20.9997 20 20.9997H4C3.44772 20.9997 3 20.552 3 19.9997V9.48882C3 9.18023 3.14247 8.88893 3.38606 8.69947L11.3861 2.47725C11.7472 2.19639 12.2528 2.19639 12.6139 2.47725L20.6139 8.69947C20.8575 8.88893 21 9.18023 21 9.48882V19.9997ZM19 18.9997V9.97791L12 4.53346L5 9.97791V18.9997H19ZM7 14.9997H17V16.9997H7V14.9997Z">
                                    </path>
                                </svg>
                                <h1 class="font-semibold text-xl text-gray-600">ROOM RESERVATION</h1>
                            </div>
                            <div class="mt-3 bg-gray-200 p-5">
                                <div class="flex justify-between items-end">
                                    <div class="flex space-x-2">
                                        <div>
                                            <x-datetime-picker placeholder="Date From" wire:model="datefrom" />
                                        </div>
                                        <div>
                                            <x-datetime-picker placeholder="Date To" wire:model="dateto" />
                                        </div>
                                    </div>
                                    <div class="flex flex-col justify-end">
                                        <h1 class="text-3xl font-bold text-cyan-700">
                                            &#8369;{{ number_format($room_price * ($total_days == 0 ? 1 : $total_days), 2) }}
                                        </h1>
                                        <x-button label="BOOK NOW" wire:click="reserveData" class="font-bold flex mt"
                                            right-icon="external-link" positive />
                                        <span class="mt-1 text-center">for {{ $total_days }} Night(s)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5">
                                <div class="flex flex-col space-y-2">
                                    @forelse (\App\Models\Room::all() as $room)
                                        <div wire:click="selectRooms({{ $room->id }})"
                                            class="border-2 {{ $room->id == $room_id ? 'border-cyan-700' : '' }} hover:border-cyan-800  relative overflow-hidden cursor-pointer   p-5 flex justify-between items-center">
                                            @if ($room->id == $room_id)
                                                <div class="absolute top-3 -rotate-45 -left-9 bg-red-700">
                                                    <span
                                                        class="text-sm text-white text-center py-1 px-8">Selected</span>
                                                </div>
                                            @endif
                                            <div class="flex space-x-5 items-center">
                                                <img src="{{ Storage::url($room->photo_path) }}"
                                                    class="h-24 rounded-lg bg-blue-400 w-24 shadow" alt="">
                                                <div>
                                                    <h1 class="text-xl uppercase text-gray-600 font-bold">
                                                        {{ $room->name }}
                                                    </h1>
                                                    <p class="text-gray-500">{{ $room->description }}</p>
                                                </div>
                                            </div>
                                            <div>
                                                <h1 class="text-xl">&#8369;{{ number_format($room->price, 2) }}/
                                                </h1>
                                                <h1 class="text-sm text-gray-500">Per Night</h1>
                                            </div>
                                        </div>
                                    @empty
                                    @endforelse
                                </div>
                                <div class="mt-10 flex justify-end">
                                    <x-button label="Close" class="font-semibold" icon="x"
                                        x-on:click="book_modal = false" negative />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
