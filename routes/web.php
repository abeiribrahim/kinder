<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\KinderController;

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
Route::fallback (function(){
    return view('404');
});
Route::get('/', function () {
    return view('welcome');
});



////////////////////////////////////////////////////////////////////////////////
//Route::get('appointment',[AppointmentController::class,'index'])->name('appointment');
Route::post('appointment',[AppointmentController::class,'create'])->name('appointment');
Route::post('storeappointment',[AppointmentController::class,'store'])->name('storeappointment');
///////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('calltoaction',[KinderController::class,'calltoaction'])->name('calltoaction');
Route::get('classes',[KinderController::class,'classes'])->name('classes');
Route::get('contact',[KinderController::class,'contact'])->name('contact');
Route::get('about',[KinderController::class,'about'])->name('about');
Route::get('pages',[KinderController::class,'about'])->name('pages');
Route::get('facility', [KinderController::class,'facility'])->name('facility');
Route::get('team', [KinderController::class,'team'])->name('team');
///////////////////////////////////////////////////////////////////////////
Route::get('kinder', [KinderController::class,'kinder'])->name('kinder');
Route::post('kinder', [KinderController::class,'store'])->name('kinder');
//////////////////////////////////////////////////////////////////////////
Route::get('testimonial', [KinderController::class,'index'])->name('testimonial');
////////////////////////////////////////////////////////////////////////////
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
