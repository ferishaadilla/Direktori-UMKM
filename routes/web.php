<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\KabController;
use App\Http\Controllers\PembinaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/admin', [AdminController::class, 'index']);

    // Umkm routes
    Route::get('/umkm', function () {
        return view('umkm'); // go to umkm.blade.php
    });
    Route::get('/umkm/show', [UmkmController::class, 'show'])->name('umkm.show'); // display
    Route::get('/umkm/create', [UmkmController::class, 'create'])->name('umkm.create'); // add
    Route::post('/umkm/store', [UmkmController::class, 'store'])->name('umkm.store');
    Route::get('/umkm/{id}/edit', [UmkmController::class, 'edit'])->name('umkm.edit'); // edit
    Route::delete('/umkm/{id}', [UmkmController::class, 'destroy'])->name('umkm.destroy'); // delete
    Route::get('/umkm/{id}', [UmkmController::class, 'view'])->name('umkm.view'); // view

    // Kategori routes
    Route::get('/kategor/create', [KategoriController::class, 'create'])->name('kategori.create'); // add
    Route::get('/kategori/show', [KategoriController::class, 'show'])->name('kategori.show'); // display
    Route::post('/kategori/store', [KategoriController::class, 'store'])->name('kategori.store');
    Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit'); // edit
    Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy'); // delete
    Route::get('/kategori/{id}', [KategoriController::class, 'view'])->name('kategori.view'); // view

    // Provinsi routes
    Route::get('/provinsi', [ProvinsiController::class, 'index'])->name('provinsi.index');
    Route::post('/provinsi/store', [ProvinsiController::class, 'store'])->name('provinsi.store');
    Route::get('/provinsi/create', [ProvinsiController::class, 'create'])->name('provinsi.create');
    Route::get('/provinsi/{id}/edit', [ProvinsiController::class, 'edit'])->name('provinsi.edit');
    Route::get('/provinsi/{id}', [ProvinsiController::class, 'show'])->name('provinsi.show');
    Route::delete('/provinsi/{id}', [ProvinsiController::class, 'destroy'])->name('provinsi.destroy');
    Route::post('/provinsi/{id}', [ProvinsiController::class, 'update'])->name('provinsi.update');
});

// Periksa routes
Route::get('/kab/show', [KabController::class, 'show'])->name('kab.show'); // display
Route::get('/kab/create', [KabController::class, 'create'])->name('kab.create'); // add
Route::post('/kab/store', [KabController::class, 'store'])->name('kab.store');
Route::get('/kab/{id}/edit', [KabController::class, 'edit'])->name('kab.edit'); // edit
Route::delete('/kab/{id}', [KabController::class, 'destroy'])->name('kab.destroy'); // delete
Route::get('/kab/{id}', [KabController::class, 'view'])->name('kab.view'); // view

// Additional routes
Route::get('/salam', function () {
    return "Selamat Datang Mahasiswa STTNF 2024"; // directly print
});

Route::get('/profil', function () {
    return view('profil'); // go to profil.blade.php
});

// Pembina routes
Route::get('/pembina/show', [PembinaController::class, 'show']);

require __DIR__.'/auth.php';