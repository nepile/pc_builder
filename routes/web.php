<?php

use App\Http\Controllers\WebController as Web;
use Illuminate\Support\Facades\Route;

Route::get('/', [Web::class, 'index'])->name('login');
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [Web::class, 'dashboard']);
});
