<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::get('/sobre-nos', AboutController::class)->name('about');

Route::get('/servicos', ServicesController::class)->name('services');

Route::get('/plano', function () {
    return view('plan-detail');
})->name('plan-detail');

Route::get('/modulo/nr-20', function () {
    return view('module-detail');
})->name('module-detail');

Route::get('/contato', ContactController::class)->name('contact');
Route::post('/contato', [ContactController::class, 'handleContactSubmit']);

Route::get('/components', function () {
    return view('dev.components');
});

Route::get('/{something}', function () {
    return view('404');
});
