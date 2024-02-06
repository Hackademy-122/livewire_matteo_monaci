<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PubblicController;

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

Route::get('/', [PubblicController::class, 'home'])->name('home');
Route::get('/Articles/index', [PubblicController::class, 'articles'])->name('articles');
Route::get('/Articles/edit/{article}', [PubblicController::class, 'edit'])->name('edit');
