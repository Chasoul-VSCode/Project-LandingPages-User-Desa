<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/app/dashboard', function () {
    return view('app.dashboard');
});
