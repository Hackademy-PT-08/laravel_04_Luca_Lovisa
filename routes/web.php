<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\indexController;
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

Route::get('/', [homeController::class,'homepage'])->name('homepage');

Route::get('/prodotti', [indexController::class,'index'])->name('prodotti');
Route::get('/prodotti/dettaglio/{id}',[indexController::class,'show'])->name('dettaglio-prodotto');