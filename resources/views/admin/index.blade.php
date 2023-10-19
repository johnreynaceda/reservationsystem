@section('title', 'Dashboard')
<x-admin-layout>
    <div>
        <div class="grid grid-cols-4 gap-5">
            <div class="shadow cursor-pointer  bg-white rounded-xl relative overflow-hidden group p-6">
                <div class="flex justify-end">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 fill-gray-500 ">
                        <path
                            d="M14 14.252V16.3414C13.3744 16.1203 12.7013 16 12 16C8.68629 16 6 18.6863 6 22H4C4 17.5817 7.58172 14 12 14C12.6906 14 13.3608 14.0875 14 14.252ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11ZM17.7929 19.9142L21.3284 16.3787L22.7426 17.7929L17.7929 22.7426L14.2574 19.2071L15.6716 17.7929L17.7929 19.9142Z">
                        </path>
                    </svg>
                </div>
                <div>
                    <p class="font-bold text-main text-3xl">{{ auth()->user()->count() }}</p>
                    <p class="mt-1 text-gray-500">Total Users</p>
                </div>
                <div class="absolute -bottom-2 -right-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        class="h-20 opacity-20 group-hover:opacity-50 fill-main">
                        <path
                            d="M13 14.0619V22H4C4 17.5817 7.58172 14 12 14C12.3387 14 12.6724 14.021 13 14.0619ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM17.7929 19.9142L21.3284 16.3787L22.7426 17.7929L17.7929 22.7426L14.2574 19.2071L15.6716 17.7929L17.7929 19.9142Z">
                        </path>
                    </svg>
                </div>
            </div>
            <div class="shadow cursor-pointer  bg-white rounded-xl relative overflow-hidden group p-6">
                <div class="flex justify-end">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 fill-gray-500 ">
                        <path
                            d="M13 18.9997H19V9.97791L12 4.53346L5 9.97791V18.9997H11V12.9997H13V18.9997ZM21 19.9997C21 20.552 20.5523 20.9997 20 20.9997H4C3.44772 20.9997 3 20.552 3 19.9997V9.48882C3 9.18023 3.14247 8.88893 3.38606 8.69947L11.3861 2.47725C11.7472 2.19639 12.2528 2.19639 12.6139 2.47725L20.6139 8.69947C20.8575 8.88893 21 9.18023 21 9.48882V19.9997Z">
                        </path>
                    </svg>
                </div>
                <div>
                    <p class="font-bold text-main text-3xl">{{ \App\Models\Room::count() }}</p>
                    <p class="mt-1 text-gray-500">Total Rooms</p>
                </div>
                <div class="absolute -bottom-2 -right-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        class="h-20 opacity-20 group-hover:opacity-50 fill-main">
                        <path
                            d="M21 19.9997C21 20.552 20.5523 20.9997 20 20.9997H4C3.44772 20.9997 3 20.552 3 19.9997V9.48882C3 9.18023 3.14247 8.88893 3.38606 8.69947L11.3861 2.47725C11.7472 2.19639 12.2528 2.19639 12.6139 2.47725L20.6139 8.69947C20.8575 8.88893 21 9.18023 21 9.48882V19.9997ZM11 12.9997V18.9997H13V12.9997H11Z">
                        </path>
                    </svg>
                </div>
            </div>
            <div class="shadow cursor-pointer  bg-white rounded-xl relative overflow-hidden group p-6">
                <div class="flex justify-end">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 fill-gray-500 ">
                        <path
                            d="M20 22H4C3.44772 22 3 21.5523 3 21V3C3 2.44772 3.44772 2 4 2H20C20.5523 2 21 2.44772 21 3V21C21 21.5523 20.5523 22 20 22ZM19 20V4H5V20H19ZM8 7H16V9H8V7ZM8 11H16V13H8V11ZM8 15H13V17H8V15Z">
                        </path>
                    </svg>
                </div>
                <div>
                    <p class="font-bold text-main text-3xl">
                        {{ \App\Models\GuestReservation::where('status', 'draft')->count() }}</p>
                    <p class="mt-1 text-gray-500">Total Pending Reservation</p>
                </div>
                <div class="absolute -bottom-2 -right-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        class="h-20 opacity-20 group-hover:opacity-50 fill-main">
                        <path
                            d="M20 22H4C3.44772 22 3 21.5523 3 21V3C3 2.44772 3.44772 2 4 2H20C20.5523 2 21 2.44772 21 3V21C21 21.5523 20.5523 22 20 22ZM8 7V9H16V7H8ZM8 11V13H16V11H8ZM8 15V17H13V15H8Z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
        <div class="mt-10 bg-white p-5 px-7 rounded-xl shadow">
            <header class="font-bold text-xl text-gray-600">
                RESERVATION LIST
            </header>
            <div class="mt-5">
                <livewire:admin.admin-dashboard />
            </div>
        </div>
    </div>
</x-admin-layout>
