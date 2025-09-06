<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'index'])->name('dashboard');

// Clients CRUD
Route::resource('clients', ClientController::class);

// Products CRUD
Route::resource('products', ProductController::class);
