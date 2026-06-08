<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::get('/buku/export', [BukuController::class, 'export'])->name('buku.export');
Route::post('/buku/bulk-delete', [BukuController::class, 'bulkDelete'])->name('buku.bulk-delete');
Route::get('/buku/search', [BukuController::class, 'search'])->name('buku.search');
Route::get('/buku/kategori/{kategori}', [BukuController::class, 'filterKategori'])->name('buku.kategori');


Route::resource('buku', BukuController::class);

Route::resource('anggota', AnggotaController::class);