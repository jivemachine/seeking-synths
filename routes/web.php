<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('seeking-synths');
});

Route::get('/test', function () {
    return view('seeking-synths-test');
});
