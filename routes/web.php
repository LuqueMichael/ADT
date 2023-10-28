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

Route::get('/', [App\Http\Controllers\WebController::class, 'index'])->name('web.index');
Route::get('/contacto', [App\Http\Controllers\WebController::class, 'contact'])->name('web.contact');
Route::get('/nosotros', [App\Http\Controllers\WebController::class, 'about'])->name('web.about');
Route::get('/blog', [App\Http\Controllers\WebController::class, 'blog'])->name('web.blog');
