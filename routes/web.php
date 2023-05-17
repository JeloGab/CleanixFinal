<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\BookingController;


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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/ourservices', [App\Http\Controllers\ServicesController::class, 'index'])->name('services');

Route::get('book',function (){return view('book');});
Route::get('contact',function (){return view('contact');});

Route::get('/ourservices/add', [ServicesController::class, 'create'])->name('add');
Route::patch('/ourservices/store', [ServicesController::class, 'store'])->name('store');
Route::get('/ourservices/edit/{id}', [ServicesController::class, 'edit'])->name('edit');

Route::patch('/book', [BookingController::class, 'store'])->name('book');

Route::post('/ourservices/update/{id}', [ServicesController::class, 'update'])->name('update');
Route::delete('/ourservices/delete/{id}', [ServicesController::class, 'destroy'])->name('delete');


