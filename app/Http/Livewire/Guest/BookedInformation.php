<?php

namespace App\Http\Livewire\Guest;

use App\Models\GuestInformation;
use App\Models\GuestReservation;
use Livewire\Component;
use Filament\Forms;
use Illuminate\Contracts\View\View;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Grid;
use App\Services\PaymongoService;

class BookedInformation extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;
    public $reservation_id;

    public $firstname, $middlename, $lastname, $contact, $address;
    public $is_paid;

    public function mount()
    {
        $this->reservation_id = request('id');
        $guest_reservation = GuestReservation::find($this->reservation_id);
        $paymongo = new PaymongoService();

        if ($guest_reservation->status == 'awaiting payment') {
            $ref_number = $guest_reservation->payment_ref_id;
            $payment_details = $paymongo->retrieve_payment_link($ref_number);
            if ($payment_details->data->attributes->status === 'paid') {
                $guest_reservation->update([
                    'status' => 'paid',
                ]);
            }
        }


    }


    public function submitRecord()
    {
        sleep(2);
        $this->validate([
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'contact' => 'required',
            'address' => 'required',
        ]);

        GuestInformation::create([
            'firstname' => $this->firstname,
            'middlename' => $this->middlename,
            'lastname' => $this->lastname,
            'contact' => $this->contact,
            'address' => $this->address,
            'user_id' => auth()->user()->id,
        ]);

    }

    public function render()
    {

        return view('livewire.guest.booked-information', [
            'booked' => GuestReservation::where('id', $this->reservation_id)->first(),
        ]);
    }

    protected function getFormSchema(): array
    {
        return [
            Grid::make(3)
                ->schema([
                    TextInput::make('firstname')->required(function ($record) {
                        return auth()->user()->guest_information == null;
                    })->disabled(function () {
            return auth()->user()->guest_information != null;
        })->placeholder(auth()->user()->guest_information->firstname ?? ''),
                    TextInput::make('middlename')->required(function ($record) {
                        return auth()->user()->guest_information == null;
                    })->disabled(function () {
            return auth()->user()->guest_information != null;
        })->placeholder(auth()->user()->guest_information->middlename ?? ''),
                    TextInput::make('lastname')->required(function ($record) {
                        return auth()->user()->guest_information == null;
                    })->disabled(function () {
            return auth()->user()->guest_information != null;
        })->placeholder(auth()->user()->guest_information->lastname ?? ''),
                    TextInput::make('contact')->required(function ($record) {
                        return auth()->user()->guest_information == null;
                    })->disabled(function () {
            return auth()->user()->guest_information != null;
        })->placeholder(auth()->user()->guest_information->contact ?? ''),
                    TextInput::make('address')->required(function ($record) {
                        return auth()->user()->guest_information == null;
                    })->disabled(function () {
            return auth()->user()->guest_information != null;
        })->placeholder(auth()->user()->guest_information->address ?? ''),
                ])
        ];
    }

    public function pay()
    {


        $guest_reservation = GuestReservation::where('id', $this->reservation_id)->first();


        if ($guest_reservation->status == 'paid') {
            return;
        }
        if ($guest_reservation->status == 'awaiting payment') {
            $this->dispatchBrowserEvent('url', ['url' => $guest_reservation->checkout_link]);
            return;
            // return redirect()->away($$guest_reservation->checkout_link);
        }
        $total_amount = $guest_reservation->total_price . '00';

        $paymongo = new PaymongoService();

        $data = $paymongo->create_payment_link([
            'data' => [
                'attributes' => [
                    'amount' => intval($total_amount),
                    'description' => 'Booking Payment',
                ]
            ]
        ]);
        $payment_ref_id = $data->data->attributes->reference_number;
        $payment_request_id = $data->data->id;

        $guest_reservation->update([
            'payment_ref_id' => $payment_ref_id,
            'payment_request_id' => $payment_request_id,
            'status' => 'awaiting payment',
            'checkout_link' => $data->data->attributes->checkout_url,
        ]);

        $this->is_paid = true;

        $payment_url = $data->data->attributes->checkout_url;

        $this->dispatchBrowserEvent('url', ['url' => $payment_url]);

    }
}