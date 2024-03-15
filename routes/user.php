<?php

use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers\User')->group(function () {
    Route::get('/', ['App\Http\Controllers\User\HomeController', 'index'])->name('/');
    Route::get('/concert/{slug}', ['App\Http\Controllers\User\HomeController', 'show'])->middleware(['auth', 'verified']);
    Route::post('/checkout', ['App\Http\Controllers\User\HomeController', 'store'])->middleware(['auth', 'verified']);
    Route::get('/checkout/{order:no_order}/success', ['App\Http\Controllers\User\HomeController', 'success'])->middleware(['auth', 'verified'])->name('checkout.success');
});

