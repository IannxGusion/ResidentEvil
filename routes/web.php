<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResidentEvilController;

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/Dashboard', function () {
    return view('Dashboard');
})->name('Dashboard');
