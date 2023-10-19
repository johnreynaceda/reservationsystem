<x-guests-layout>
    <div class="relative overflow-hidden bg-gray-800">
        {{-- <div class="custom-shape-divider-bottom-1695864863 realtive z-10">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="shape-fill"></path>
            </svg>
        </div> --}}
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
                    <a href="#" class="text-sm font-medium leading-6 text-white">Location</a>
                    <a href="#" class="text-sm font-medium leading-6 text-white">Contact Us</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">

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
        <section class="py-40 bg-white relative">

            <div class="mx-auto max-w-7xl">
                <div class="grid place-content-center">
                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" class="h-96"
                        viewBox="0 0 766.84671 588.52402" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="ad541598-f069-4770-8bea-87004c1f5716" data-name="Group 7">
                            <path id="f29270bb-d112-452d-932b-13393490bccd-85" data-name="Path 149"
                                d="M661.40034,742.552c-.111-.18415-2.77364-4.62754-3.69671-13.85434-.846-8.46459-.30232-22.73277,7.09775-42.6359,14.01854-37.70493-3.23073-68.12677-3.40659-68.42967l.851-.49371a75.598,75.598,0,0,1,7.12494,20.18435,88.05734,88.05734,0,0,1-3.64678,49.08239c-13.99413,37.64056-3.59019,55.459-3.48371,55.63485Z"
                                transform="translate(-216.57664 -155.73799)" fill="#f2f2f2" />
                            <circle id="fcebc901-c108-48a2-87e5-7ddb6540303c" data-name="Ellipse 19" cx="439.34243"
                                cy="453.28747" r="6.39325" fill="#f2f2f2" />
                            <circle id="b5fd1405-e948-4f51-8090-73404e30ab37" data-name="Ellipse 20" cx="459.50514"
                                cy="476.89228" r="6.39325" fill="#f2f2f2" />
                            <circle id="ac970879-223f-419f-9066-0afbab83f669" data-name="Ellipse 21" cx="445.73511"
                                cy="492.62939" r="6.39325" fill="#f2f2f2" />
                            <circle id="a05fe744-c6b8-499a-b570-83da982f4ab7" data-name="Ellipse 22" cx="462.45576"
                                cy="505.90737" r="6.39325" fill="#f2f2f2" />
                            <circle id="aa7e6742-c9e7-4b11-83e1-b132a19c1cd6" data-name="Ellipse 23" cx="440.81745"
                                cy="526.5616" r="6.39325" fill="#f2f2f2" />
                            <path id="b97b0dec-9dc3-4d20-978e-1db07813fbb6-86" data-name="Path 150"
                                d="M665.26235,742.785s-6.39326-15.73654,12.786-27.53952Z"
                                transform="translate(-216.57664 -155.73799)" fill="#f2f2f2" />
                            <path id="adf0fd01-34d6-447b-82cb-31f3ba0f5028-87" data-name="Path 151"
                                d="M657.40074,742.50207s-2.90955-16.7345-25.42878-16.59138Z"
                                transform="translate(-216.57664 -155.73799)" fill="#f2f2f2" />
                        </g>
                        <path id="ab4f3350-d584-452d-9eac-b0b73bd1c74e-88" data-name="Path 140"
                            d="M326.07167,277.457a25.846,25.846,0,1,1,25.846-25.846,25.846,25.846,0,0,1-25.846,25.846Zm0-50.8a24.955,24.955,0,1,0,24.955,24.955,24.95493,24.95493,0,0,0-24.955-24.955Z"
                            transform="translate(-216.57664 -155.73799)" fill="#3f3d56" />
                        <path id="b38c2432-9b55-44a1-a6c5-37f262cb8526-89" data-name="Path 174"
                            d="M588.07166,277.457a25.846,25.846,0,1,1,25.846-25.846,25.846,25.846,0,0,1-25.846,25.846Zm0-50.8a24.955,24.955,0,1,0,24.955,24.955,24.95493,24.95493,0,0,0-24.955-24.955Z"
                            transform="translate(-216.57664 -155.73799)" fill="#3f3d56" />
                        <path id="b9a1c0cd-2b1d-41a9-871b-afddc5e936af-90" data-name="Path 146"
                            d="M682.70161,217.47h-450.245c-8.765.015-15.868,8.79-15.88,19.62V451.747c.012,10.829,7.115,19.6,15.88,19.62h450.245c8.765-.015,15.868-8.79,15.88-19.62V237.089c-.012-10.829-7.115-19.6-15.88-19.62Zm14.014,234.277c-.01,9.556-6.277,17.3-14.012,17.311h-450.247c-7.735-.012-14-7.755-14.012-17.311V237.089c.009-9.556,6.277-17.3,14.012-17.311h450.245c7.735.012,14,7.755,14.012,17.311Z"
                            transform="translate(-216.57664 -155.73799)" fill="#3f3d56" />
                        <rect id="a89ccb60-c26f-4785-b3c5-3332740adbf1" data-name="Rectangle 21" x="33"
                            y="148.06801" width="80" height="56" fill="#f2f2f2" />
                        <rect id="b7e05322-8b5b-4202-896a-d010557e20ee" data-name="Rectangle 30" x="145"
                            y="148.06801" width="80" height="56" fill="#f2f2f2" />
                        <rect id="ad37576e-0400-4032-9a23-fea9f12fbce1" data-name="Rectangle 31" x="257"
                            y="148.06801" width="80" height="56" fill="#f2f2f2" />
                        <rect id="aa533c7f-257d-4f82-9a34-f3791ed05f8e" data-name="Rectangle 32" x="369"
                            y="148.06801" width="80" height="56" fill="#f2f2f2" />
                        <rect id="ab695b59-e86b-4a87-812a-08bf740c05b4" data-name="Rectangle 33" x="33"
                            y="230.06801" width="80" height="56" fill="#f2f2f2" />
                        <rect id="a6c88313-aaf4-41f2-8928-a742f49a0902" data-name="Rectangle 34" x="145"
                            y="230.06801" width="80" height="56" fill="#f2f2f2" />
                        <rect id="f58c3339-a4c0-4d62-ba2a-e54ff2bf716d" data-name="Rectangle 35" x="257"
                            y="230.06801" width="80" height="56" fill="#f2f2f2" />
                        <rect id="a422fb6a-8004-41fc-ab64-b502da5703c1" data-name="Rectangle 36" x="369"
                            y="230.06801" width="80" height="56" fill="#f2f2f2" />
                        <path id="e86106fc-25bd-447d-bb7e-e20bb3b23e30-91" data-name="Path 168"
                            d="M388.22563,441.48l-18.885-26.081,5.144-3.724,14.456,19.963,55.317-56.832,4.55,4.43Z"
                            transform="translate(-216.57664 -155.73799)" fill="#315673" />
                        <path id="aa2d9f48-069a-485a-b75e-c70dd332b5e8-92" data-name="Path 176"
                            d="M501.22563,359.48l-18.885-26.081,5.144-3.724,14.456,19.963,55.317-56.832,4.55,4.43Z"
                            transform="translate(-216.57664 -155.73799)" fill="#315673" />
                        <rect id="a17708df-8f3a-464e-8619-6278c337a09b" data-name="Rectangle 38" x="108.46899"
                            width="1.367" height="95.99" fill="#2f2e41" />
                        <rect id="e9aa34a1-352e-42c8-a0fd-7deef0e48a7e" data-name="Rectangle 40" x="371.46899"
                            width="1.367" height="95.99" fill="#2f2e41" />
                        <path id="fc392f67-ef8a-4310-beff-ce5a3a27e5fb-93" data-name="Path 88"
                            d="M981.95767,744.259h-379.251a1.375,1.375,0,1,1,0-2.744h379.251a1.375,1.375,0,1,1,0,2.744Z"
                            transform="translate(-216.57664 -155.73799)" fill="#3f3d56" />
                        <path id="ba3ff805-5da2-4d08-bd39-7111d50a55d9-94" data-name="Path 238"
                            d="M277.22563,359.48l-18.885-26.081,5.144-3.724,14.456,19.963,55.317-56.832,4.55,4.43Z"
                            transform="translate(-216.57664 -155.73799)" fill="#315673" />
                        <g id="b4e7e83f-48c8-42d0-a802-1200052d292a" data-name="Group 8">
                            <path id="bdecccf6-f579-4d39-b60a-bacda51b23df-95" data-name="Path 200"
                                d="M872.82565,528.524a10.5306,10.5306,0,0,1,1.621-.347l21.9-44.5-6.686-10.023,13.807-12.067,17.357,21.24-35.351,51.448a10.49993,10.49993,0,1,1-12.648-5.751Z"
                                transform="translate(-216.57664 -155.73799)" fill="#ffb8b8" />
                            <path id="b851710e-73ca-4439-b312-82ecd7f1d520-96" data-name="Path 201"
                                d="M910.20865,467.742a4.51279,4.51279,0,0,1-1.016.8l-22.406,12.989a4.5,4.5,0,0,1-6.1499-1.63665q-.09393-.162-.17407-.33133l-10.9-23.023a4.476,4.476,0,0,1,1.537-5.645l13.889-9.448a4.5,4.5,0,0,1,5.718.544l19.413,19.481a4.5,4.5,0,0,1,.086,6.269Z"
                                transform="translate(-216.57664 -155.73799)" fill="#ccc" />
                            <path id="ad151a06-cd68-422d-8460-5ec9215ef0ce-97" data-name="Path 202"
                                d="M941.66862,722.713l-11.83,3.219-18.045-44.1,17.46-4.751Z"
                                transform="translate(-216.57664 -155.73799)" fill="#ffb8b8" />
                            <path id="a741d46f-b26c-45f0-81fb-c6a01d8961c3-98" data-name="Path 203"
                                d="M920.47242,724.84523l22.81362-6.2073,3.90742,14.3609L910.01511,743.1146a14.887,14.887,0,0,1,10.45625-18.27326h.00006Z"
                                transform="translate(-216.57664 -155.73799)" fill="#2f2e41" />
                            <path id="b643b79b-b2db-4e0a-a6b9-2a26cd7af685-99" data-name="Path 204"
                                d="M840.53764,731.74h-12.261l-5.833-47.288h18.094Z"
                                transform="translate(-216.57664 -155.73799)" fill="#ffb8b8" />
                            <path id="a8551279-f8d8-4e53-ac0b-f4d7d43df3e0-100" data-name="Path 205"
                                d="M819.52061,728.236h23.644v14.888H804.63365a14.887,14.887,0,0,1,14.886-14.888Z"
                                transform="translate(-216.57664 -155.73799)" fill="#2f2e41" />
                            <circle id="ffb0ed30-f7ca-4f01-bb29-dfb3f0108b7e" data-name="Ellipse 33" cx="636.87802"
                                cy="245.451" r="24.561" fill="#ffb8b8" />
                            <path id="fe8d7a91-2eb0-4840-bbb3-2ac5f6694a19-101" data-name="Path 206"
                                d="M839.78665,698.024h-16.753a4.513,4.513,0,0,1-4.5-4.223c-4.992-79.361-2.072-136.289,9.19-179.153a4.69192,4.69192,0,0,1,.182-.552l.9-2.243a4.479,4.479,0,0,1,4.179-2.829h34.452a4.493,4.493,0,0,1,3.417,1.571l4.679,5.46c.091.106.177.215.259.329,21.1,29.426,40.011,86.954,61.912,164.278a4.485,4.485,0,0,1-2.958,5.517l-18,5.762a4.524,4.524,0,0,1-5.425-2.332l-46.723-96.907a3.5,3.5,0,0,0-6.62,1.046L844.24564,694.133A4.517,4.517,0,0,1,839.78665,698.024Z"
                                transform="translate(-216.57664 -155.73799)" fill="#2f2e41" />
                            <path id="ac260d39-3f12-4112-9245-19e088f5ff96-102" data-name="Path 207"
                                d="M873.64462,516.455h-.141l-41.851-1.324a4.485,4.485,0,0,1-4.329-3.954c-5.3-42.941,9.244-54.445,15.746-57.4a3.46007,3.46007,0,0,0,2.012-2.743l.563-4.5a4.48314,4.48314,0,0,1,.889-2.186c10.194-13.205,24.113-17.434,31.5-18.778a4.493,4.493,0,0,1,5.21674,3.62762q.01986.11073.03424.22238l.843,6.463a3.559,3.559,0,0,0,.713,1.691c21.259,27.792-2.424,68.827-7.388,76.771h0A4.508,4.508,0,0,1,873.64462,516.455Z"
                                transform="translate(-216.57664 -155.73799)" fill="#ccc" />
                            <path id="b7ced118-7cfa-4844-a3c8-435a3db4f4e2-103" data-name="Path 239"
                                d="M860.476,570.12686l-31.61854,6.0933-1.20114-6.23589,24.202-4.66485L823.729,491.16693l5.93784-2.25149Z"
                                transform="translate(-216.57664 -155.73799)" fill="#315673" />
                            <path id="a52cfa20-9d3d-49ed-8bbb-6f27952576f3-104" data-name="Path 208"
                                d="M903.00766,403.954a97.7524,97.7524,0,0,0-19.505-20.42c-6.2-4.841-13.1-8.978-20.709-10.956s-16.019-1.642-22.963,2.049-14.125,11.025-14.169,18.889c-.014,2.527.629,5.945,3.117,5.508l.72.1,18.007-3.637,7.669,26.616c.539,1.87,1.262,3.961,3.037,4.758,1.672.751,3.6.043,5.3-.663.278-.116,2.668-5.482,2.668-5.482a1,1,0,0,1,1.723-.288l1.42,1.775a2,2,0,0,0,2.332.6l29.366-12.259c1.353-.565,2.865-1.3,3.257-2.715C904.64761,406.468,903.81967,405.1,903.00766,403.954Z"
                                transform="translate(-216.57664 -155.73799)" fill="#2f2e41" />
                            <path id="bd21c6a3-3a01-4e11-8b47-ec36a28067e7-105" data-name="Path 211"
                                d="M869.74167,577.49a10.74294,10.74294,0,0,0,1.406-16.412l7.773-93.871-23.144,3.184-.44,91.2a10.8,10.8,0,0,0,14.4,15.9Z"
                                transform="translate(-216.57664 -155.73799)" fill="#ffb8b8" />
                            <path id="b8799e3f-759a-46c3-9e68-c27b7b779f3b-106" data-name="Path 212"
                                d="M880.43362,480.724a4.51269,4.51269,0,0,1-1.28-.185l-24.846-7.308a4.5,4.5,0,0,1-3.04737-5.58692q.05283-.17949.12036-.35409l9.195-23.754a4.476,4.476,0,0,1,5.153-2.772l16.415,3.568a4.5,4.5,0,0,1,3.542,4.521l-.764,27.492a4.5,4.5,0,0,1-4.488,4.378Z"
                                transform="translate(-216.57664 -155.73799)" fill="#ccc" />
                        </g>
                    </svg>
                    <h1 class="text-center font-semibold text-gray-700 mt-10 text-2xl">YOU HAVE SUCCESSFULLY BOOKED THE
                        ROOM</h1>
                </div>
            </div>

        </section>

    </div>
</x-guests-layout>
