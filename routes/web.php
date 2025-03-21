<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/sobre-nos', function () {
    return view('about');
});

Route::get('/contato', function () {
    return view('contact');
});

Route::get('/components', function () {
    return view('dev.components');
});
