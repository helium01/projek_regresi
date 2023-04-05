<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeramalanController;
use App\Http\Controllers\ProsesController;

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
    return view('admin.penjualan.home');
});

Auth::routes();
Route::get('/pengujian', [ProsesController::class, 'regresi']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/penjualan', [peramalanController::class, 'index']);
Route::get('/presentase', [peramalanController::class, 'inflasi']);
Route::get('/minat', [peramalanController::class, 'minat']);
Route::get('/trands', [peramalanController::class, 'trands']);
Route::get('/penjualan/create', [peramalanController::class, 'create']);
Route::get('/penjualan/edit/{peramalan}', [peramalanController::class, 'edit']);
Route::get('/penjualan/delete/{peramalan}', [peramalanController::class, 'destroy']);
Route::post('/penjualan/store', [peramalanController::class, 'store']);
Route::post('/penjualan/update/{peramalan}', [peramalanController::class, 'update']);
