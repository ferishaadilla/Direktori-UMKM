<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome'); //ke file welcome.blade.php
});

//menampilkan web dirinya sendiri - cara 1
Route::get('/salam', function () {
    return "Selamat Datang Mahasiswa STTNF 2024"; //langsung di cetak
});

//menampilkan web melalui file di lokasi lain - cara 2
Route::get('/profil', function () {
    return view('profil'); //ke file profil.blade.php
});

Route::get('/pasien', function () {
    return view('pasien'); //ke file pasien.blade.php
});

//menampilkan web melalui file di lokasi lain - cara 2
Route::get('/paramedik', function () {
    return view('paramedik'); //ke file paramedik.blade.php
});

//menampilkan web melalui file di lokasi lain - cara 2
Route::get('/periksa', function () {
    return view('periksa'); //ke file periksa.blade.php
});

//menampilkan web melalui file di lokasi lain - cara 2
Route::get('/provinsi', function () {
    return view('kelurahan'); //ke file kelurahan.blade.php
});

//menampilkan web melalui file di lokasi lain - cara 2
Route::get('/unit_kerja', function () {
    return view('unit_kerja'); //ke file unit_kerja.blade.php
});

//routing dengan memanfaatkan controller - cara 3
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/admin', [AdminController::class, 'index']);

//routing pasien
use App\Http\Controllers\PasienController;
Route::get('/pasien/show', [PasienController::class, 'show'])->name('pasien.show'); //tampilkan
Route::get('/pasien/create', [PasienController::class, 'create'])->name('pasien.create'); //add
Route::post('/pasien/store', [PasienController::class, 'store'])->name('pasien.store');
Route::get('/pasien/{id}/edit', [PasienController::class, 'edit'])->name('pasien.edit'); //edit
Route::delete('/pasien/{id}', [PasienController::class, 'destroy'])->name('pasien.destroy'); //delete
Route::get('/pasien/{id}', [PasienController::class, 'view'])->name('pasien.view'); //view

//routing paramedik
use App\Http\Controllers\ParamedikController;
Route::get('/paramedik/show', [ParamedikController::class, 'show'])->name('paramedik.show'); //tampilkan
Route::get('/paramedik/create', [ParamedikController::class, 'create'])->name('paramedik.create'); //add
Route::post('/paramedik/store', [ParamedikController::class, 'store'])->name('paramedik.store');
Route::get('/paramedik/{id}/edit', [ParamedikController::class, 'edit'])->name('paramedik.edit'); //edit
Route::delete('/paramedik/{id}', [ParamedikController::class, 'destroy'])->name('paramedik.destroy'); //delete
Route::get('/paramedik/{id}', [ParamedikController::class, 'view'])->name('paramedik.view'); //view

//routing kelurahan
use App\Http\Controllers\KelurahanController;
Route::get('/kelurahan', [KelurahanController::class, 'index'])->name('kelurahan.index');
Route::get('/kelurahan/create', [KelurahanController::class, 'create'])->name('kelurahan.create');
Route::post('/kelurahan/store', [KelurahanController::class, 'store'])->name('kelurahan.store');
Route::get('/kelurahan/show/{id}', [KelurahanController::class, 'show'])->name('kelurahan.show');

//routing periksa
use App\Http\Controllers\PeriksaController;
Route::get('/periksa/show', [PeriksaController::class, 'show'])->name('periksa.show'); //tampilkan
Route::get('/periksa/create', [PeriksaController::class, 'create'])->name('periksa.create'); //add
Route::post('/periksa/store', [PeriksaController::class, 'store'])->name('periksa.store');
Route::get('/periksa/{id}/edit', [PeriksaController::class, 'edit'])->name('periksa.edit'); //edit
Route::delete('/periksa/{id}', [PeriksaController::class, 'destroy'])->name('periksa.destroy'); //delete
Route::get('/periksa/{id}', [PeriksaController::class, 'view'])->name('periksa.view'); //view

//routing unit_kerja
use App\Http\Controllers\Unit_kerjaController;
Route::get('/unit_kerja/show', [Unit_kerjaController::class, 'show']);