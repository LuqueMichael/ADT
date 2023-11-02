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

/** ADMIN BLOG **/
Route::get('/admin', [App\Http\Controllers\BlogAdminController::class, 'index'])->name('blog.admin.index');
Route::get('/admin/publicaciones', [App\Http\Controllers\BlogAdminController::class, 'post'])->name('blog.admin.post');
Route::get('/admin/publicaciones/agregar', [App\Http\Controllers\BlogAdminController::class, 'postStore'])->name('blog.admin.post.save');
Route::get('/admin/publicaciones/editar/{id}', [App\Http\Controllers\BlogAdminController::class, 'postUpdate'])->name('blog.admin.post.update');

Route::get('/admin/publicaciones/show', [App\Http\Controllers\PostController::class, 'show'])->name('blog.admin.show');
Route::post('/admin/publicaciones/store', [App\Http\Controllers\PostController::class, 'store']);
