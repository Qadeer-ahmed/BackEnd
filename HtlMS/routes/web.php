<?php

use App\Http\Controllers\HotelController;
use App\Http\Controllers\imageController;
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
Route::get('/image-form',[imagecontroller::class,'showimageform'])->name('image.form');

Route::post('/upload-image', [imageController::class, 'uploadImage'])->name('upload.image');

Route::post('/',[HotelController::class,'create'])->name('hotel.create');
Route::get('/hotels/list', [HotelController::class,'list'])->name('hotel.show');
Route::get('/edit/{id}',[HotelController::class,'edit'])->name('hotel.edit');
Route::put('/edit/{id}',[HotelController::class,'update'])->name('hotel.update');
Route::get('/delete/{id}',[HotelController::class,'destroy'])->name('hotel.destroy');

 