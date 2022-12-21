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
    return view('welcome');
});

Route::get('/card', [App\Http\Controllers\CardController::class,'index'])->name('card.index');

Route::post('/card', [App\Http\Controllers\CardController::class,'doShuffle'])->name('card.shuffle');

Route::get('/sqlCompare', [App\Http\Controllers\SqlReaderController::class,'index'])->name('sqlCompare.index');
