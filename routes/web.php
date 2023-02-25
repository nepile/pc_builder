<?php

use App\Http\Controllers\WebController as Web;
use Illuminate\Support\Facades\Route;

Route::get('/', [Web::class, 'index'])->name('login');
Route::post('/handle_login', [Web::class, 'handle_login']);
Route::post('/handle_logout', [Web::class, 'handle_logout']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [Web::class, 'dashboard'])->name('dashboard');
    Route::middleware('cekrole:admin')->group(function () {
        Route::get('/komponen', [Web::class, 'komponen'])->name('komponen');
        Route::post('/tambah_komponen', [Web::class, 'tambah_komponen']);
        Route::post('/tambah_simulator', [Web::class, 'tambah_simulator']);
        Route::post('/hapus_simulator/{id}', [Web::class, 'hapus_simulator']);
        Route::get('/simulator', [Web::class, 'simulator'])->name('simulator');
    });

    Route::middleware('cekrole:simulator')->group(function () {
        Route::get('/buat_rakitan', [Web::class, 'buat_rakitan'])->name('buat_rakitan');
        Route::get('/rakitanku', [Web::class, 'rakitanku'])->name('rakitanku');
        Route::post('/tambah_rakitan', [Web::class, 'tambah_rakitan']);
    });
});
