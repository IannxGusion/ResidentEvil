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

Route::get('/residentevil2', function () {
    return view('residentevil2');
});

Route::get('/residentevil3', function () {
    return view('residentevil3');
});

Route::get('/residentevil4', function () {
    return view('residentevil4');
});

Route::get('/residentevil5', function () {
    return view('residentevil5');
});

Route::get('/residentevil6', function () {
    return view('residentevil6');
});

Route::get('/residentevil7', function () {
    return view('residentevil7');
});

Route::get('/residentevil8', function () {
    return view('residentevil8');
});

Route::get('/residentevil9', function () {
    return view('residentevil9');
});

