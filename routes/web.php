<?php

use App\Http\Controllers\DosenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])
    ->name('mahasiswa.index');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('/mahasiswa/data', [MahasiswaController::class, 'data'])->name('mahasiswa.data');
Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::post('/mahasiswa/update/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::get('/mahasiswa/hapus/{id}', [MahasiswaController::class, 'hapus'])->name('mahasiswa.hapus');
Route::delete('/mahasiswa/delete/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');
Route::get('/mahasiswa/show/{id}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');

Route::prefix('dosen')
    ->name('dosen.')
    ->group(function () {
        Route::get('/', [DosenController::class, 'index'])->name('index');
        Route::get('/create', [DosenController::class, 'create'])->name('create');
        Route::post('/', [DosenController::class, 'store'])->name('store');
        Route::get('/{dosen}/edit', [DosenController::class, 'edit'])->name('edit');
        Route::put('/{dosen}', [DosenController::class, 'update'])->name('update');
        Route::get('/{dosen}', [DosenController::class, 'show'])->name('show');
        Route::delete('/{dosen}', [DosenController::class, 'destroy'])->name('destroy');
    });
