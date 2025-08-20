<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/Dashboard', function () {
    return view('Dashboard');
})->name('Dashboard');

// routes/web.php
Route::get('/residentevil0', function () {
    return view('residentevil0');
});

Route::get('/residentevil1', function () {
    return view('residentevil1');
});

Route::get('/residentevilcodeveronica', function () {
    return view('residentevilcodeveronica');
});

Route::get('/residentevil2', function () {
    return view('residentevil2');
});