<?php

namespace App\Http\Livewire\Admin;

use App\Models\GuestReservation;
use Livewire\Component;
use App\Models\Post;
use Filament\Tables;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Tables\Columns\BadgeColumn;

class AdminDashboard extends Component implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    protected function getTableQuery(): Builder
    {
        return GuestReservation::query();
    }

    protected function getTableColumns(): array
    {

        return [
            TextColumn::make('user.name')->label('GUEST NAME')->searchable()->weight('bold')->color('primary')->formatStateUsing(
                function ($record) {
                    return strtoupper($record->user->name);
                }
            ),
            ViewColumn::make('room_details')->view('admin.reservation.list')->label('ROOM DETAILS'),
            TextColumn::make('date')->label('RESERVATION DATE')->formatStateUsing(
                function ($record) {
                    return \Carbon\Carbon::parse($record->date_from)->format('F d, Y h:i A') . ' - ' . \Carbon\Carbon::parse($record->date_to)->format('F d, Y h:i A');
                }
            ),
            TextColumn::make('total_price')->label('TOTAL AMOUNT')->searchable()->weight('bold')->color('danger')->formatStateUsing(
                function ($record) {
                    return '₱' . number_format($record->total_price, 2);
                }
            ),

            BadgeColumn::make('status')->label('PAYMENT STATUS')
                ->enum([
                    'draft' => 'Draft',
                    'awaiting_payment' => 'Awaiting payment',
                    'paid' => 'Paid',
                ])->colors([
                        'danger' => 'draft',
                        'warning' => 'awaiting payment',
                        'success' => 'paid',
                    ])->icon('heroicon-o-cash')
        ];

    }


    public function render()
    {
        return view('livewire.admin.admin-dashboard');
    }
}