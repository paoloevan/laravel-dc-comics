<?php

use App\Http\Controllers\ComicController;
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

Route::get('/comics', [ComicController::class, 'index'])->name('index');
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('show');
Route::get('/create', [ComicController::class, 'create'])->name('create');
Route::post('/comics', [ComicController::class, 'store'])->name('store');
Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('edit');
Route::put('/comics/{comic}', [ComicController::class, 'update'])->name('update');
Route::delete('comics/{comic}', [ComicController::class, 'destroy'])->name('destroy');
