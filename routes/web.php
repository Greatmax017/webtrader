<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('/dashboard');
});

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\TradeController::class, 'index'])->name('dashboard');
Route::get('/calendar', [App\Http\Controllers\TradeController::class, 'calendar'])->name('calendar');
Route::post('/buyOder', [App\Http\Controllers\TradeController::class, 'buyOrder'])->name('buyOrder');
Route::post('/endTrade', [App\Http\Controllers\TradeController::class, 'endTrade'])->name('endTrade');
