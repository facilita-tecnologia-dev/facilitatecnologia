<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/sobre-nos', function () {
    return view('about');
});

Route::get('/servicos', function () {
    return view('services');
});

Route::get('/plano', function () {
    return view('plan-detail');
});

Route::get('/modulo/nr-20', function () {
    return view('module-detail');
});

Route::get('/contato', function () {
    return view('contact');
});

Route::get('/components', function () {
    return view('dev.components');
});
