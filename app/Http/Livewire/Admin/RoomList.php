<?php

namespace App\Http\Livewire\Admin;

use App\Models\Room;
use Illuminate\Support\Facades\Storage;
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


class RoomList extends Component implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    protected function getTableQuery(): Builder
    {

        return Room::query();

    }

    protected function getTableHeaderActions()
    {
        return [
            Action::make('add')->label('Add New')->button()->color('gray')->icon('heroicon-o-plus')->action(
                function ($record) {
                    return redirect()->route('admin.room.add');
                }
            ),
        ];
    }

    protected function getTableColumns(): array
    {
        return [
            ViewColumn::make('photo_path')->view('admin.room.photo_path')->label('PHOTO'),
            TextColumn::make('name')->label('NAME'),
            TextColumn::make('description')->label('DESCRIPTION'),
            TextColumn::make('price')->label('PRICE')->formatStateUsing(
                function ($record) {
                    return '₱' . number_format($record->price, 2);
                }
            ),

        ];
    }

    protected function getTableActions(): array
    {
        return [
            Tables\Actions\EditAction::make()->color('success'),
            Tables\Actions\DeleteAction::make(),
        ];
    }

    public function render()
    {
        return view('livewire.admin.room-list');
    }
}