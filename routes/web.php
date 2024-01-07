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

Route::view('/home', 'home.master');
Route::view('/', 'home.master');
Route::view('/contact', 'home.contact');

Route::get('/product', [App\Http\Controllers\HomeController::class, 'index'])->name('product');
Route::post('/', [App\Http\Controllers\HomeController::class, 'store'])->name('addtocart');
Route::delete('/', [App\Http\Controllers\HomeController::class, 'destroy'])->name('clearcart');
Route::delete('/cart/{id}', [App\Http\Controllers\HomeController::class, 'hapus_item'])->name('hapus_item');

Auth::routes();
Route::prefix('admin')->middleware('role:admin')->group(function () {
    Route::get('', [App\Http\Controllers\Admin\IndexController::class, 'index'])->name('dashboard');

    Route::resource('product', App\Http\Controllers\Admin\ProductController::class);
});
