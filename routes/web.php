<?php

use Illuminate\Support\Facades\Auth;
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
    return redirect()->route('login');
});
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('master');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('master');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product');

Auth::routes();
Route::prefix('admin')->middleware('role:admin')->group(function () {
    Route::get('', [App\Http\Controllers\Admin\IndexController::class, 'index'])->name('dashboard');

    Route::resource('product', App\Http\Controllers\Admin\ProductController::class);
});

Route::prefix('user')->middleware('role:user')->group(function () {
    Route::post('/', [App\Http\Controllers\ProductController::class, 'store'])->name('addtocart');
    Route::delete('/', [App\Http\Controllers\ProductController::class, 'destroy'])->name('clearcart');
    Route::delete('/cart/{id}', [App\Http\Controllers\ProductController::class, 'hapus_item'])->name('hapus_item');
});
