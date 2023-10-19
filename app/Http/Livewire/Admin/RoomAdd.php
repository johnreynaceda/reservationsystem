<?php

namespace App\Http\Livewire\Admin;

use App\Models\Room;
use Livewire\Component;
use Filament\Forms;
use Illuminate\Contracts\View\View;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Livewire\WithFileUploads;

class RoomAdd extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;
    use WithFileUploads;

    public $name, $price, $description, $attachment;
    protected function getFormSchema(): array
    {
        return [
            Fieldset::make('ROOM INFORMATION')
                ->schema([
                    Grid::make(2)
                        ->schema([
                            TextInput::make('name')->required(),
                            TextInput::make('price')->numeric()->required()->prefix('₱'),
                            Textarea::make('description')->required()
                        ]),
                    Grid::make(2)
                        ->schema([
                            FileUpload::make('attachment')
                        ])
                ])
        ];
    }

    public function submitRecord()
    {
        sleep(2);
        foreach ($this->attachment as $key => $value) {
            Room::create([
                'name' => $this->name,
                'price' => $this->price,
                'description' => $this->description,
                'photo_path' => $value->store('Room Image', 'public'),
            ]);
        }
        sweetalert()->addSuccess('Room Added');
        return redirect()->route('admin.room');
    }

    public function render()
    {
        return view('livewire.admin.room-add');
    }
}