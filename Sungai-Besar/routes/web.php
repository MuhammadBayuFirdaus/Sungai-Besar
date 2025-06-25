<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashBoard');
});

Route::get('/beritaterkini', function () {
    return view('beritaTerkini');
});

Route::get('/kegiatan', function () {
    return view('kegiatan');
});




