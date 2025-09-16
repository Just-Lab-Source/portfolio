<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/legal/imprint', function () {
    return view('legal.imprint');
});

Route::get('/legal/privacy', function () {
    return view('legal.privacy');
});

Route::get('/legal/privacy-policy', function () {
    return view('legal.privacy-policy');
});
