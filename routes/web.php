<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
})->name('pages.index');

Route::get('/about', function () {
    return view('pages.about');
})->name('pages.about');