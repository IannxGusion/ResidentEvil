<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/Dashboard', function () {
    return view('Dashboard');
})->name('Dashboard');
