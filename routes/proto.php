<?php

Route::prefix('/proto')->group(function () {

    // http://127.0.0.1:8000/proto/
    Route::inertia('/', 'Prototype/HomePage');

});