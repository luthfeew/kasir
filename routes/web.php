<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::resource('/cashier', \App\Http\Controllers\CashierController::class);
Route::resource('/item', \App\Http\Controllers\BarangController::class)->parameters(['item' => 'barang']);
Route::resource('/buy', \App\Http\Controllers\PembelianController::class);
Route::resource('/supplier', \App\Http\Controllers\SupplierController::class);

Route::resource('/report/sale', \App\Http\Controllers\PenjualanController::class);

Route::resource('/employee', \App\Http\Controllers\KaryawanController::class)->parameters(['employee' => 'user']);
// Route::resource('/admin/settings', \App\Http\Controllers\UserController::class);
