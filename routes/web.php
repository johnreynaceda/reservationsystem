<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/guest/booked-successfully', function () {
    return view('pages.success');
})->name('booked-successfully');

Route::get('/guest/payment-failed', function () {
    return view('pages.payment-failed');
})->name('payment-failed');

Route::get('/dashboard', function () {
    if (auth()->user()->is_admin) {
        return redirect()->route('admin.dashboard');
    } else {
        return redirect()->route('guest.dashboard');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

//ADMIN
Route::prefix('administrator')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('admin.dashboard');
    Route::get('/room', function () {
        return view('admin.room');
    })->name('admin.room');
    Route::get('/room/add', function () {
        return view('admin.room.add');
    })->name('admin.room.add');
    Route::get('/guests', function () {
        return view('admin.guests');
    })->name('admin.guests');
    Route::get('/payments', function () {
        return view('admin.payments');
    })->name('admin.payments');
});


//GUEST
Route::prefix('guest')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('guest.index');
    })->name('guest.dashboard');
    Route::get('/booked-information/{id}', function () {
        return view('guest.booked-information');
    })->name('guest.booked-information');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';