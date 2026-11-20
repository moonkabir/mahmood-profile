<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/intelligence', function () {
    return view('intelligence');
})->name('intelligence');

Route::get('/cv', function () {
    return view('cv');
})->name('cv');
