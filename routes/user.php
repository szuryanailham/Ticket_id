<?php

use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers\User')
    ->middleware(['auth', 'verified'])
    ->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('/');
        Route::get('/concert/{slug}', 'HomeController@show');
        Route::post('/checkout', 'HomeController@store');
        Route::get('/checkout/{order:no_order}/success', 'HomeController@success')
            ->name('checkout.success');
    });

