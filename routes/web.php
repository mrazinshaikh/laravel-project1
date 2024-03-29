<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/products', [App\Http\Controllers\ProductsController::class, 'index'])->name('home');
Route::get('/products', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\ProductsController::class, 'index']);
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']);
Route::get('/cart/{user}', [App\Http\Controllers\CartController::class, 'index']);


