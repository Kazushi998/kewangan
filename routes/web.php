<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\ElaunController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PotonganController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('dashboard', 'dashboard')
	->name('dashboard')
	->middleware(['auth', 'verified']);

Route::resource('profile', ProfileController::class);
Route::resource('gaji', GajiController::class);
Route::resource('elaun', ElaunController::class);
Route::resource('potongan', PotonganController::class);
