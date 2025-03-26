<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CMS\IndexController;
use App\Http\Controllers\CMS\LoginController;
use App\Http\Controllers\CMS\modules\ModulesListController;
use App\Http\Controllers\CMS\plans\PlansListController;
use App\Http\Controllers\CMS\Sections\ListController;
use App\Http\Controllers\CMS\Sections\SectionsListController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/sobre-nos', AboutController::class)->name('about');
Route::get('/servicos', ServicesController::class)->name('services');
Route::get('/plano/{plan}', PlanController::class)->name('plan-detail');
Route::get('/modulo/{module}', ModuleController::class)->name('module-detail');
Route::get('/contato', ContactController::class)->name('contact');
Route::post('/contato', [ContactController::class, 'handleContactSubmit']);

Route::get('/cms/login', LoginController::class)->name('cms.login');
Route::post('/cms/login', [LoginController::class, 'handleLogin']);

Route::get('/cms', IndexController::class)->name('cms.index');
Route::get('/cms/secoes', SectionsListController::class)->name('cms.sections');
Route::get('/cms/planos', PlansListController::class)->name('cms.plans');
Route::get('/cms/modulos', ModulesListController::class)->name('cms.modules');

Route::get('/components', function () {
    return view('dev.components');
});

Route::get('/{something}', function () {
    return view('404');
});

