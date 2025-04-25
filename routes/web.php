<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () { return view('inicio'); })->name('inicio');
Route::get('/eventos', function () { return view('eventos'); })->name('eventos');
Route::get('/registro', function () { return view('registro'); })->name('registro');
