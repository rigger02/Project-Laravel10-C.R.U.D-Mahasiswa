<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MuridController;

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

Route::get('/',[MuridController::class,'index'])->name('index');
Route::get('/create',[MuridController::class,'create'])->name('create');
Route::post('/',[MuridController::class,'store'])->name('store');
Route::get('/{id}',[MuridController::class,'edit'])->name('edit');
Route::put('/{id}',[MuridController::class,'update'])->name('update');
Route::delete('/{id}',[MuridController::class,'destroy'])->name('destroy');
