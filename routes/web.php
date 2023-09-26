<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\DownloadController;

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



Route::get('/', [HomeController::class, 'index'])->middleware('guest');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/home', [HomeController::class, 'index']);
Route::get('/detail', [DetailController::class, 'index']);

Route::get('/detail/{product:id}', [DetailController::class, 'index']);


Route::get('/galeri', [GaleriController::class, 'index']);
Route::get('/checkout/{product:id}', [checkoutController::class, 'showProduct'])->middleware('auth');
Route::post('/history/{product:id}', [checkoutController::class, 'store']);
Route::get('/history', [PesananController::class, 'tampilkanPesananUser'])->middleware('auth');
Route::get('/pembayaran/{pesanan:id}', [PembayaranController::class, 'bayar'])->middleware('auth');
// Route::post('/upload/{pesanan:id}', [PembayaranController::class, 'upload']);
Route::post('/upload/{pesanan:id}', [PembayaranController::class, 'upload']);
// Route::get('/download/{image_original}', 'DownloadController@download')->name('download');
// Route::get('/download/{image_original}', [DownloadController::class, 'downloadPhoto']);
Route::get('/photo/download/{image_original}', [DownloadController::class, 'downloadPhoto'])->name('download.photo');

