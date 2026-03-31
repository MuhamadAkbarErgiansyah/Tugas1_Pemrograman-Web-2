<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
})->name('beranda');

Route::get('/program', function () {
    return view('pages.program');
})->name('program');

Route::get('/galeri', function () {
    return view('pages.galeri');
})->name('galeri');

Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');
