<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashBoard');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/kegiatan', function () {
    return view('kegiatan');
});

Route::get('/admin', function () {
    return view('admin');
});




