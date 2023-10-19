<?php

namespace App\Http\Livewire\Admin;

use App\Models\GuestInformation;
use Livewire\Component;
use Filament\Tables;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Collection;
use App\Models\User;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ViewColumn;

class GuestList extends Component implements Tables\Contracts\HasTable
{

    use Tables\Concerns\InteractsWithTable;

    protected function getTableQuery(): Builder
    {
        return GuestInformation::query();
    }

    protected function getTableColumns(): array
    {
        return [
            // ViewColumn::make('photo_path')->view('admin.room.photo_path')->label('PHOTO'),
            TextColumn::make('firstname')->label('FIRSTNAME')->searchable(),
            TextColumn::make('middlename')->label('MIDDLENAME')->searchable(),
            TextColumn::make('lastname')->label('LASTNAME')->searchable(),
            TextColumn::make('address')->label('ADDRESS')->searchable(),
            TextColumn::make('contact')->label('PHONE NUMBER')->searchable(),


        ];
    }

    public function render()
    {
        return view('livewire.admin.guest-list');
    }
}