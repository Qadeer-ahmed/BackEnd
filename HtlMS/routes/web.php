<?php

use App\Http\Controllers\HotelController;
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

Route::get('/',[HotelController::class,'index'])->name('hotel.index');
Route::post('/',[HotelController::class,'create'])->name('hotel.create');
Route::get('/edit/{id}',[HotelController::class,'edit'])->name('hotel.edit');
Route::put('/edit/{id}',[HotelController::class,'update'])->name('hotel.update');
Route::get('/delete/{id}',[HotelController::class,'destroy'])->name('hotel.destroy');

 