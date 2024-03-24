<?php

use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('/', [PdfController::class,'index'])->name('pdf');
Route::get('/pdf', [PdfController::class,'pdf'])->name('pdf');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
