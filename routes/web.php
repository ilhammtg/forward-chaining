<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\SolusiController;
use App\Http\Controllers\MasalahController;
use App\Http\Controllers\DiagnosaController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [DiagnosaController::class, 'index'])->name('diagnosa.index');
Route::post('/diagnosa', [DiagnosaController::class, 'proses'])->name('diagnosa.proses');

Route::prefix('admin')->group(function () {
    Route::resource('gejala', GejalaController::class);
    Route::resource('masalah', MasalahController::class);
    Route::resource('solusi', SolusiController::class);
    Route::resource('rule', RuleController::class);
});
