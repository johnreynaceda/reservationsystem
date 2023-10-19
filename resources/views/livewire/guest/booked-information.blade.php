<div x-data x-on:url.window="window.open($event.detail.url,'_blank')">
    <div class="mx-auto max-w-7xl">
        <header class="text-3xl font-bold text-cyan-600">SOUTH WAVE BEACH HOUSE</header>
        <div class="mt-10 grid grid-cols-3 gap-10">
            <div class="col-span-2">
                <div class="border">
                    <div class="flex space-x-2 border-b px-5 py-3 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-gray-700" viewBox="0 0 24 24">
                            <path
                                d="M20 22H18V20C18 18.3431 16.6569 17 15 17H9C7.34315 17 6 18.3431 6 20V22H4V20C4 17.2386 6.23858 15 9 15H15C17.7614 15 20 17.2386 20 20V22ZM12 13C8.68629 13 6 10.3137 6 7C6 3.68629 8.68629 1 12 1C15.3137 1 18 3.68629 18 7C18 10.3137 15.3137 13 12 13ZM12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z">
                            </path>
                        </svg>
                        <span class="font-bold text-lg text-gray-700">
                            YOUR PERSONAL INFORMATION
                        </span>
                    </div>
                    <div class="p-5">
                        <div>{{ $this->form }}</div>
                        @if (auth()->user()->guest_information == null)
                            <div class="mt-5">
                                <x-button label="Submit" wire:click="submitRecord" spinner="submitRecord"
                                    class="font-semibold" right-icon="save" dark />
                            </div>
                        @endif
                    </div>
                </div>
                <div class="border mt-5">
                    <div class="flex space-x-2 border-b px-5 py-3 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-gray-700" viewBox="0 0 24 24">
                            <path
                                d="M21 8V20.9932C21 21.5501 20.5552 22 20.0066 22H3.9934C3.44495 22 3 21.556 3 21.0082V2.9918C3 2.45531 3.4487 2 4.00221 2H14.9968L21 8ZM19 9H14V4H5V20H19V9ZM8 7H11V9H8V7ZM8 11H16V13H8V11ZM8 15H16V17H8V15Z">
                            </path>
                        </svg>
                        <span class="font-bold text-lg text-gray-700">
                            ROOM INFORMATION
                        </span>
                    </div>
                    <div class="p-5">
                        <div wire:ignore
                            class="aspect-w-16 cursor-pointer aspect-h-10 h-64 group relative overflow-hidden rounded-2xl bg-black/25 transition hover:ring-4 hover:ring-cyan-600 active:opacity-75 active:ring-indigo-500/25">
                            <img class="object-cover" src="{{ Storage::url($booked->room->photo_path) }}" />
                            <div
                                class="absolute inset-0 flex flex-col justify-between bg-gradient-to-b from-transparent via-cyan-600/40 to-black">
                                <div class="flex items-center justify-start space-x-2 p-4">

                                </div>
                                <div class="flex items-end justify-between space-x-2 px-4 py-5">
                                    <div class="space-y-1">
                                        <h3 class="text-3xl font-semibold uppercase text-white">
                                            {{ $booked->room->name }}
                                        </h3>
                                        <p class=" font-semibold text-white">
                                            &#8369;{{ number_format($booked->room->price, 2) }}</p>
                                        <p class="text-sm w-64 truncate text-gray-50">
                                            {{ $booked->room->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <div class="border ">
                    <div class="flex space-x-2 border-b px-5 py-3 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-gray-700" viewBox="0 0 24 24">
                            <path
                                d="M22.0049 7H23.0049V17H22.0049V20C22.0049 20.5523 21.5572 21 21.0049 21H3.00488C2.4526 21 2.00488 20.5523 2.00488 20V4C2.00488 3.44772 2.4526 3 3.00488 3H21.0049C21.5572 3 22.0049 3.44772 22.0049 4V7ZM20.0049 17H14.0049C11.2435 17 9.00488 14.7614 9.00488 12C9.00488 9.23858 11.2435 7 14.0049 7H20.0049V5H4.00488V19H20.0049V17ZM21.0049 15V9H14.0049C12.348 9 11.0049 10.3431 11.0049 12C11.0049 13.6569 12.348 15 14.0049 15H21.0049ZM14.0049 11H17.0049V13H14.0049V11Z">
                            </path>
                        </svg>
                        <span class="font-bold text-lg text-gray-700">
                            PRICE SUMMARY
                        </span>
                    </div>
                    <div class="p-5 border-b">
                        <div class="flex justify-between items-center">
                            <div>
                                <h1 class="font-bold uppercase text-cyan-700">{{ $booked->room->name }}</h1>
                                <h1 class="text-xs leading-3"> for {{ $booked->total_days }} Night</h1>
                            </div>
                            <span>&#8369;{{ number_format($booked->total_price, 2) }}</span>
                        </div>
                    </div>
                    <div class="p-5">
                        @if ($is_paid != true)
                            @if ($booked->status != 'paid')
                                <x-button label="PAY NOW" icon="cash" wire:click="pay" class="font-bold" positive />
                            @else
                                <x-button label="Done Transaction" dark right-icon="external-link"
                                    href="{{ route('guest.dashboard') }}" />
                            @endif
                        @else
                            <x-button label="Done Transaction" dark right-icon="external-link"
                                href="{{ route('guest.dashboard') }}" />
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
