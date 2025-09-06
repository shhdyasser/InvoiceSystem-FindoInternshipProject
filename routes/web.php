<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;

Route::get('/', [HomeController::class, 'index'])->name('dashboard');

Route::resource('clients', ClientController::class);
Route::get('/clients', [ClientController::class, 'index']);
Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
