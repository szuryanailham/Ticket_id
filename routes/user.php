<?php
Route::namespace('App\Http\Controllers\User')->group(function () {
    Route::get('/', 'HomeController@index');
    Route::get('/concert/{slug}', 'HomeController@show');
    Route::post('/checkout', 'HomeController@store');
    Route::get('/checkout/{order:no_order}/success', 'HomeController@success')->name('checkout.success');
});
?>