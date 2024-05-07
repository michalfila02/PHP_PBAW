<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WypozyczalnieController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\WypozyczalniaController;
use App\Http\Controllers\SamochodyController;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('wypozyczalnie', WypozyczalnieController::class);
Route::resource('wypozyczalnia', WypozyczalniaController::class);
Route::resource('samochody', SamochodyController::class);
Route::resource('role', RoleController::class);



