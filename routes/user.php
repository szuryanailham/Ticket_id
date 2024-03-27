<?php
use App\Http\Controllers\User\OrderTicketController;
use Illuminate\Support\Facades\Route;

// Rute tanpa autentikasi
Route::get('/', [OrderTicketController::class, 'landingPage']);

// Rute dengan autentikasi
Route::namespace('App\Http\Controllers\User')
    ->middleware(['auth', 'verified'])
    ->group(function () {
        Route::match(['get', 'post'], '/concert', [OrderTicketController::class, 'index'])->name('/concert');
        Route::get('/concert/{slug}', 'OrderTicketController@show');
        Route::post('/checkout', 'OrderTicketController@store');
        // Route::post('/search', [OrderTicketController::class, 'index']);
        Route::get('/checkout/{order:no_order}/success', 'OrderTicketController@success')
            ->name('checkout.success');
    });


