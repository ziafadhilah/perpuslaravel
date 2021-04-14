<?php

use App\Http\Controllers\BukusController;
use App\Http\Controllers\AnggotasController;
use App\Http\Controllers\TransaksisController;
use App\Http\Controllers\KategorisController;
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

//RouteBukus
Route::get('/', [BukusController::class, 'index']);
Route::get('/buku', [BukusController::class, 'index']);
Route::get('/buku/{buku}', [BukusController::class, 'show']);
Route::get('create/buku', [BukusController::class, 'create']);
Route::post('create/buku', [BukusController::class, 'store']);
Route::delete('/buku/{buku}', [BukusController::class, 'destroy']);
Route::get('/buku/{buku}/edit', [BukusController::class, 'edit']);
Route::patch('/buku/{buku}', [BukusController::class, 'update']);

//RouteAnggotas
Route::get('/anggota', [AnggotasController::class, 'index']);
Route::get('/anggota/{anggota}', [AnggotasController::class, 'show']);
Route::get('/create/anggota', [AnggotasController::class, 'create']);
Route::post('/create/anggota', [AnggotasController::class, 'store']);
Route::delete('/anggota/{anggota}', [AnggotasController::class, 'destroy']);
Route::get('/anggota/{anggota}/edit', [AnggotasController::class, 'edit']);
Route::patch('/anggota/{anggota}', [AnggotasController::class, 'update']);

//RouteKategoris
Route::get('/kategori', [KategorisController::class, 'index']);
Route::get('/kategori/{kategori}', [KategorisController::class, 'show']);
Route::get('/create/kategori', [KategorisController::class, 'create']);
Route::post('/create/kategori', [KategorisController::class, 'store']);
Route::delete('/kategori/{kategori}', [KategorisController::class, 'destroy']);
Route::get('/kategori/{kategori}/edit', [KategorisController::class, 'edit']);
Route::patch('/kategori/{kategori}', [KategorisController::class, 'update']);

//RouteTransaksis
Route::get('/transaksi', [TransaksisController::class, 'index']);
Route::get('/transaksi/{transaksi}', [TransaksisController::class, 'show']);
Route::get('/create/transaksi', [TransaksisController::class, 'create']);
Route::post('/create/transaksi', [TransaksisController::class, 'store']);
Route::delete('/transaksi/{transaksi}', [TransaksisController::class, 'destroy']);
Route::get('/transaksi/{transaksi}/edit', [TransaksisController::class, 'edit']);
Route::put('/transaksi/{transaksi}', [TransaksisController::class, 'update']);

// Route::get('/', function () {
//     return view('welcome');
// });
