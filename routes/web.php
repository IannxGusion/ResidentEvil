<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResidentEvilController;
use App\Http\Controllers\DevilMayCryController;
use App\Http\Controllers\SilentHillController;

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/Dashboard', function () {
    return view('Dashboard');
})->name('Dashboard');

Route::get('/residentevil', [ResidentEvilController::class, 'index'])->name('ResidentEvil');
Route::get('/devilmaycry', [DevilMayCryController::class, 'index'])->name('DevilMayCry');
Route::get('/silenthill', [SilentHillController::class, 'index'])->name('SilentHill');
