<?php
use App\Http\Controllers\AppointmentController;
 use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\TestimonialController;
 use App\Http\Controllers\TeacherController;
 use App\Http\Controllers\ClassController;
 use App\Http\Controllers\ContactController;

 
Route::prefix('admin')->group(function () {
    //testimonial
Route::get('indextestimonial',[TestimonialController::class,'index'])->name('indextestimonial');
Route::get('updatetestimonial/{id}',[TestimonialController::class,'edit']);
Route::put('update/{id}',[TestimonialController::class,'update'])->name('update');
Route::get('createtestimonial',[TestimonialController::class,'create'])->name('createtestimonial');
Route::post('storetestimonial',[TestimonialController::class,'store'])->name('storetestimonial');
Route::get('showtestimonial/{id}',[TestimonialController::class,'show'])->name('showtestimonial');
Route::get('deletetestimonial/{id}',[TestimonialController::class,'destroy']);
Route::get('trashed',[TestimonialController::class,'trashed'])->name('trashed');
Route::get('restoretestimonial/{id}',[TestimonialController::class,'restore'])->name('restoretestimonial');
Route::get('forceDelete/{id}',[TestimonialController::class,'forceDelete'])->name('forceDelete');
//appointment
Route::get('indexappointment',[AppointmentController::class,'index'])->name('indexappointment');
Route::get('showappointment/{id}',[AppointmentController::class,'show'])->name('showappointment');

Route::post('storeappointment',[AppointmentController::class,'store'])->name('storeappointment');
//tescher
Route::get('indexteacher',[TeacherController::class,'index'])->name('indexteacher');

Route::get('updateteacher/{id}',[TeacherController::class,'edit']);
Route::put('update/{id}',[TeacherController::class,'update'])->name('update');

Route::get('createteacher',[TeacherController::class,'create'])->name('createteacher');

Route::post('storeteacher',[TeacherController::class,'store'])->name('storeteacher');
Route::get('showteacher/{id}',[TeacherController::class,'show'])->name('showteacher');
//classes
Route::get('indexclass',[ClassController::class,'index'])->name('indexclass');

Route::get('updateclass/{id}',[ClassController::class,'edit']);
Route::put('update/{id}',[ClassController::class,'update'])->name('update');

Route::get('createclass',[ClassController::class,'create'])->name('createclass');

Route::post('storeclass',[ClassController::class,'store'])->name('storeclass');
Route::get('showclass/{id}',[ClassController::class,'show'])->name('showclass');
//contact
Route::get('indexmsg', [ContactController::class,'index'])->name('indexmsg');
Route::get('showmsg/{id}', [ContactController::class,'show'])->name('showmsg');
Route::get('deletemsg/{id}', [ContactController::class,'destroy'])->name('deletemsg');




 });