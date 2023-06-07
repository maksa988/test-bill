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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/order', [\App\Http\Controllers\OrderController::class, 'show'])->name('order');
Route::post('/order', [\App\Http\Controllers\OrderController::class, 'store'])->name('order.store');
