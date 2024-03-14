<?php

use App\Http\Controllers\AddEventController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
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

    Route::get('/', [EventsController::class, 'showHomePage'])->name('/');
Route::get('ticket', function () {
    return view('ticket');
})->name('ticket');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::post('addCat', [CategoryController::class, 'store'])->name('addCat');
    Route::get('dashboard', [CategoryController::class, 'index'])->name('dashboard');
    Route::put('modifiedCat/{c}', [CategoryController::class, 'update'])->name('modifiedCat');
    Route::delete('deleteCat/{c}', [CategoryController::class, 'destroy'])->name('deleteCat');
    Route::put('/events/{event}/accept', [EventsController::class, 'accept'])->name('event.accept');
    Route::put('/events/{event}/deny', [EventsController::class, 'deny'])->name('event.deny');
});

Route::middleware(['auth', 'role:organiser'])->group(function () {
    Route::get('addEvent', [AddEventController::class, 'showAddEventForm'])->name('addEvent');
    Route::post('storeEvent', [EventsController::class, 'store'])->name('storeEvent');
    Route::get('orgDashboard', [AddEventController::class, 'acceptEvents'])->name('orgDashboard');
    Route::post('manuelAccept/{r}', [AddEventController::class, 'manuelAccept'])->name('manuelAccept');

});
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::post('/events/{event}/reserve', [EventsController::class, 'reserve'])->name('event.reserve'); 
    Route::get('myRes', [ReservationController::class, 'index'])->name('myRes');   
    Route::get('searchTitle', [EventsController::class, 'searchTitle'])->name('searchTitle');   
});


require __DIR__.'/auth.php';
