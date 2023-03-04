<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Livewire\Register;
use \App\Http\Livewire\Login;
use \App\Http\Livewire\Tickets;
use \App\Http\Livewire\Create;

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

Route::get('/', Login::class)->middleware('guest');
Route::post('logout', Login::class)->middleware('auth')->name('logout');
Route::get('register', Register::class)->middleware('guest');
Route::get('tickets', Tickets::class)->middleware('auth');
Route::get('create', Create::class)->name('ticket.create')->middleware('auth');
