<?php
use App\Http\Controllers\AppointmentController;
 use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\TestimonialController;
 
Route::prefix('admin')->group(function () {
Route::get('indextestimonial',[TestimonialController::class,'index'])->name('indextestimonial');
////////////////////////////////////////////////
Route::get('updatetestimonial/{id}',[TestimonialController::class,'edit']);
Route::put('update/{id}',[TestimonialController::class,'update'])->name('update');
/////////////////////////////////////////
Route::get('createtestimonial',[TestimonialController::class,'create'])->name('createtestimonial');
//////////////////////////////////////////////////////
Route::post('storetestimonial',[TestimonialController::class,'store'])->name('storetestimonial');
/////////////////////////////////////////////////////
Route::get('showtestimonial/{id}',[TestimonialController::class,'show'])->name('showtestimonial');
////////////////////////////
Route::get('appointment',[AppointmentController::class,'index'])->name('appointment');
Route::get('showappointment/{id}',[AppointmentController::class,'show'])->name('showappointment');
///////////////////////////////////////////////////////////////////////////////////////
Route::get('deletetestimonial/{id}',[TestimonialController::class,'destroy']);
Route::get('trashed',[TestimonialController::class,'trashed'])->name('trashed');
Route::get('restoretestimonial/{id}',[TestimonialController::class,'restore'])->name('restoretestimonial');
Route::get('forceDelete/{id}',[TestimonialController::class,'forceDelete'])->name('forceDelete');

 });