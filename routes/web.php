<?php
use App\Mail\DemoMail;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\KinderController;
use App\Http\Controllers\ContactController;

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


 Route::get('kinder',[KinderController::class,'index'])->name('kinder');
 Route::post('kinder', [KinderController::class,'store'])->name('kinder');
 Route::post('appointment',[AppointmentController::class,'store'])->name('appointment');
///////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('calltoaction',[KinderController::class,'calltoaction'])->name('calltoaction');
Route::get('classes',[KinderController::class,'classes'])->name('classes');
///////////////////////////////////////////////////////////
Route::get('contact', [ContactController::class,'create'])->name('contact');
Route::post('contact', [ContactController::class,'store'])->name('contact');
Route::post('contact', [KinderController::class,'sendemails'])->name('contact');
/////////////////////////////////////////////////////////////////////////
Route::get('about',[KinderController::class,'about'])->name('about');
Route::get('pages',[KinderController::class,'about'])->name('pages');
Route::get('facility', [KinderController::class,'facility'])->name('facility');
Route::get('team', [KinderController::class,'team'])->name('team');
///////////////////////////////////////////////////////////////////////////
Route::get('testimonial', [KinderController::class,'testimonial'])->name('testimonial');
Route::get('storetestimonial', [KinderController::class,'storetestimonial'])->name('storetestimonial');

//////////////////////////////////////////////////////////////////////////
Route::get('appointment', [KinderController::class,'appointment'])->name('appointment');
////////////////////////////////////////////////////////////////////////////
Route::get('testimonial', [KinderController::class,'testimonial'])->name('testimonial');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');
