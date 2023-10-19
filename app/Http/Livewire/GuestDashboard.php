<?php

namespace App\Http\Livewire;

use App\Models\GuestReservation;
use App\Models\Room;
use Livewire\Component;

class GuestDashboard extends Component
{
    public $datefrom, $dateto, $total_days;

    public $reservation_modal = false;
    public $room_id, $room_price = 0;
    public function render()
    {
        return view('livewire.guest-dashboard');
    }

    public function bookNow()
    {
        $this->reservation_modal = true;
    }

    public function selectRoom($id)
    {
        $this->room_id = $id;

        $this->room_price = Room::where('id', $this->room_id)->first()->price;
        $this->reservation_modal = true;
    }
    public function selectRooms($id)
    {
        $this->room_id = $id;
        $this->room_price = Room::where('id', $this->room_id)->first()->price;

    }

    public function updatedDateto()
    {
        $this->total_days = \Carbon\Carbon::parse($this->datefrom)->diffInDays($this->dateto);
    }

    public function reserveData()
    {
        $this->validate([
            'datefrom' => 'required',
            'dateto' => 'required',
            'room_id' => 'required',
        ]);

        $reserve = GuestReservation::create([
            'user_id' => auth()->user()->id,
            'room_id' => $this->room_id,
            'date_from' => \Carbon\Carbon::parse($this->datefrom),
            'date_to' => \Carbon\Carbon::parse($this->dateto),
            'total_price' => $this->room_price * $this->total_days,
            'total_days' => $this->total_days,
        ]);

        return redirect()->route('guest.booked-information', ['id' => $reserve->id]);
    }
}