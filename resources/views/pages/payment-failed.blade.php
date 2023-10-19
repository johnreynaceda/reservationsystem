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
                <div class="flex flex-col space-y-5">
                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" class="h-96"
                        viewBox="0 0 567.1704 517.30967" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect x="326.03543" y="307.38928" width="495" height="45"
                            transform="translate(-385.45426 -17.88532) rotate(-16.24392)" fill="#3f3d56" />
                        <path
                            d="M386.40028,575.96948,316.35377,335.55639a7.0001,7.0001,0,0,1,4.76257-8.67871L784.8346,191.76928a7.00645,7.00645,0,0,1,8.67871,4.76221l62.05591,212.98877-1.92016.55957L791.59315,197.09106a5.00865,5.00865,0,0,0-6.19922-3.40186L321.67579,328.7976a5.00029,5.00029,0,0,0-3.40186,6.19922l70.04651,240.41309Z"
                            transform="translate(-316.07106 -191.48811)" fill="#3f3d56" />
                        <path
                            d="M752.93324,410.51a6.51233,6.51233,0,0,1-6.24341-4.6831l-11.74854-40.32324a6.50734,6.50734,0,0,1,4.42212-8.0586l40.32349-11.74853a6.50722,6.50722,0,0,1,8.05859,4.42285L799.494,390.44262a6.50733,6.50733,0,0,1-4.42212,8.05859l-40.32349,11.74854A6.47854,6.47854,0,0,1,752.93324,410.51Z"
                            transform="translate(-316.07106 -191.48811)" fill="#315673" />
                        <path
                            d="M385.31751,336.3a11.691,11.691,0,0,0-.43017-1.22,11.99972,11.99972,0,0,0-22.90967,6.67,11.37989,11.37989,0,0,0,.29,1.26,12.01924,12.01924,0,0,0,11.52978,8.64,11.74908,11.74908,0,0,0,3.3501-.48A12.01262,12.01262,0,0,0,385.31751,336.3Zm-8.73,12.95a10.01322,10.01322,0,0,1-12.3999-6.8,11.435,11.435,0,0,1-.28027-1.26,9.99681,9.99681,0,0,1,19.04-5.54,8.33837,8.33837,0,0,1,.45019,1.21A10.00446,10.00446,0,0,1,376.58753,349.25006Z"
                            transform="translate(-316.07106 -191.48811)" fill="#315673" />
                        <path
                            d="M355.88508,344.87a11.00221,11.00221,0,0,1,4.20834-12.0571,11,11,0,1,0,5.81753,19.96694A11.00221,11.00221,0,0,1,355.88508,344.87Z"
                            transform="translate(-316.07106 -191.48811)" fill="#315673" />
                        <path
                            d="M666.7472,394.43005a6.04249,6.04249,0,0,0-7.44971-4.2L592.90736,408.8l-7.14991,2h44.89991l7.1499-2,24.75-6.92A6.04864,6.04864,0,0,0,666.7472,394.43005Z"
                            transform="translate(-316.07106 -191.48811)" fill="#ccc" />
                        <path
                            d="M619.77747,380.56005a6.04513,6.04513,0,0,0-7.45019-4.19l-99.61963,27.86a6.06838,6.06838,0,0,0-4.37012,6.57h25.79l7.15967-2,74.30029-20.78A6.05544,6.05544,0,0,0,619.77747,380.56005Z"
                            transform="translate(-316.07106 -191.48811)" fill="#ccc" />
                        <path
                            d="M876.24147,408.79777H393.241a7.00787,7.00787,0,0,0-7,7v286a7.00755,7.00755,0,0,0,7,7H876.24147a7.00786,7.00786,0,0,0,7-7v-286A7.00818,7.00818,0,0,0,876.24147,408.79777Zm5,293a5.00181,5.00181,0,0,1-5,5H393.241a5.0018,5.0018,0,0,1-5-5v-286a5.00213,5.00213,0,0,1,5-5H876.24147a5.00213,5.00213,0,0,1,5,5Z"
                            transform="translate(-316.07106 -191.48811)" fill="#3f3d56" />
                        <path
                            d="M440.23744,447.8a12,12,0,1,1,12-12A12.01375,12.01375,0,0,1,440.23744,447.8Zm0-22a10,10,0,1,0,10,10A10.0113,10.0113,0,0,0,440.23744,425.8Z"
                            transform="translate(-316.07106 -191.48811)" fill="#315673" />
                        <path
                            d="M421.58526,435.8a11.00221,11.00221,0,0,1,7.413-10.39858,11,11,0,1,0,0,20.79717A11.00222,11.00222,0,0,1,421.58526,435.8Z"
                            transform="translate(-316.07106 -191.48811)" fill="#315673" />
                        <path
                            d="M488.88112,577.57805a9.01031,9.01031,0,0,1-9-9v-27a9,9,0,0,1,18,0v27A9.01032,9.01032,0,0,1,488.88112,577.57805Z"
                            transform="translate(-316.07106 -191.48811)" fill="#315673" />
                        <path
                            d="M512.88112,577.57805a9.01031,9.01031,0,0,1-9-9v-27a9,9,0,0,1,18,0v27A9.01032,9.01032,0,0,1,512.88112,577.57805Z"
                            transform="translate(-316.07106 -191.48811)" fill="#315673" />
                        <path
                            d="M536.88112,577.57805a9.01031,9.01031,0,0,1-9-9v-27a9,9,0,0,1,18,0v27A9.01032,9.01032,0,0,1,536.88112,577.57805Z"
                            transform="translate(-316.07106 -191.48811)" fill="#315673" />
                        <path
                            d="M573.88112,577.57805a9.01031,9.01031,0,0,1-9-9v-27a9,9,0,0,1,18,0v27A9.01032,9.01032,0,0,1,573.88112,577.57805Z"
                            transform="translate(-316.07106 -191.48811)" fill="#315673" />
                        <path
                            d="M597.88112,577.57805a9.01031,9.01031,0,0,1-9-9v-27a9,9,0,0,1,18,0v27A9.01032,9.01032,0,0,1,597.88112,577.57805Z"
                            transform="translate(-316.07106 -191.48811)" fill="#315673" />
                        <path
                            d="M621.88112,577.57805a9.01031,9.01031,0,0,1-9-9v-27a9,9,0,0,1,18,0v27A9.01032,9.01032,0,0,1,621.88112,577.57805Z"
                            transform="translate(-316.07106 -191.48811)" fill="#315673" />
                        <path
                            d="M658.88112,577.57805a9.01031,9.01031,0,0,1-9-9v-27a9,9,0,0,1,18,0v27A9.01032,9.01032,0,0,1,658.88112,577.57805Z"
                            transform="translate(-316.07106 -191.48811)" fill="#315673" />
                        <path
                            d="M682.88112,577.57805a9.01031,9.01031,0,0,1-9-9v-27a9,9,0,0,1,18,0v27A9.01032,9.01032,0,0,1,682.88112,577.57805Z"
                            transform="translate(-316.07106 -191.48811)" fill="#315673" />
                        <path
                            d="M706.88112,577.57805a9.01031,9.01031,0,0,1-9-9v-27a9,9,0,0,1,18,0v27A9.01032,9.01032,0,0,1,706.88112,577.57805Z"
                            transform="translate(-316.07106 -191.48811)" fill="#315673" />
                        <path
                            d="M743.88112,577.57805a9.01031,9.01031,0,0,1-9-9v-27a9,9,0,0,1,18,0v27A9.01032,9.01032,0,0,1,743.88112,577.57805Z"
                            transform="translate(-316.07106 -191.48811)" fill="#315673" />
                        <path
                            d="M767.88112,577.57805a9.01031,9.01031,0,0,1-9-9v-27a9,9,0,0,1,18,0v27A9.01032,9.01032,0,0,1,767.88112,577.57805Z"
                            transform="translate(-316.07106 -191.48811)" fill="#315673" />
                        <path
                            d="M791.88112,577.57805a9.01031,9.01031,0,0,1-9-9v-27a9,9,0,0,1,18,0v27A9.01032,9.01032,0,0,1,791.88112,577.57805Z"
                            transform="translate(-316.07106 -191.48811)" fill="#315673" />
                        <path
                            d="M549.89914,677.745H420.45883a6.04736,6.04736,0,1,1,0-12.09472H549.89914a6.04736,6.04736,0,1,1,0,12.09472Z"
                            transform="translate(-316.07106 -191.48811)" fill="#e6e6e6" />
                        <path
                            d="M508.39914,651.745H461.95883a6.04736,6.04736,0,1,1,0-12.09472h46.44031a6.04736,6.04736,0,1,1,0,12.09472Z"
                            transform="translate(-316.07106 -191.48811)" fill="#e6e6e6" />
                        <rect x="71.81005" y="277.08994" width="493" height="2" fill="#3f3d56" />
                    </svg>
                    <h1 class="text-center mt-10 font-semibold text-red-700 mt-10 text-2xl">PAYMENT FAILED</h1>
                    <p class="text-center">The Payment was unsuccessful due to an abnormally. Please try again later or
                        use another payment
                        method. </p>
                </div>
            </div>

        </section>

    </div>
</x-guests-layout>
