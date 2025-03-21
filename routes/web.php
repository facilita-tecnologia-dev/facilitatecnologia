<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/sobre-nos', function () {
    return view('about');
})->name('about');

Route::get('/servicos', function () {
    return view('services');
})->name('services');

Route::get('/plano', function () {
    return view('plan-detail');
})->name('plan-detail');

Route::get('/modulo/nr-20', function () {
    return view('module-detail');
})->name('module-detail');

Route::get('/contato', function () {
    return view('contact');
})->name('contact');

Route::get('/components', function () {
    return view('dev.components');
});

Route::get('/{something}', function () {
    return view('404');
});
