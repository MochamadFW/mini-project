<?php

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

Route::get('/student', [App\Http\Controllers\student\studentController::class, 'index']);
Route::post('/student', [App\Http\Controllers\student\studentController::class, 'store'])->name('InputStudent');
Route::put('/student', [App\Http\Controllers\student\studentController::class, 'update'])->name('UpdateStudent');
Route::delete('/delete', [App\Http\Controllers\student\studentController::class, 'destroy'])->name('DeleteStudent');
