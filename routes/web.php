<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CMS\CompanyInfoController;
use App\Http\Controllers\CMS\contents\ContentDetailController;
use App\Http\Controllers\CMS\contents\ContentsListController;
use App\Http\Controllers\CMS\IndexController;
use App\Http\Controllers\CMS\LoginController;
use App\Http\Controllers\CMS\LogoutController;
use App\Http\Controllers\CMS\modules\ModuleDetailController;
use App\Http\Controllers\CMS\modules\ModulesListController;
use App\Http\Controllers\CMS\plans\PlanDetailController;
use App\Http\Controllers\CMS\plans\PlansListController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\PageNotFoundController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ServicesController;
use App\Http\Middleware\CMS\AuthMiddleware;
use App\Http\Middleware\CMS\GuestMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/sobre-nos', AboutController::class)->name('about');
Route::get('/servicos', ServicesController::class)->name('services');
Route::get('/plano/{plan}', PlanController::class)->name('plan-detail');
Route::get('/modulo/{module}', ModuleController::class)->name('module-detail');
Route::get('/contato', ContactController::class)->name('contact');
Route::post('/contato', [ContactController::class, 'handleContactSubmit']);


Route::prefix('cms')->group(function () {
    Route::middleware(GuestMiddleware::class)->group(function(){
        Route::get('/login', LoginController::class)->name('cms.login');
        Route::post('/login', [LoginController::class, 'handleLogin']);
    });
    
    Route::middleware(AuthMiddleware::class)->group(function(){
        Route::get('/', IndexController::class)->name('cms.index');
        
        Route::get('/logout', LogoutController::class)->name('cms.logout');
        
        Route::get('/conteudos', ContentsListController::class)->name('cms.contents');
        Route::get('/conteudos/{content}', ContentDetailController::class)->name('cms.content-detail');
        Route::post('/conteudos/{content}', [ContentDetailController::class, 'handleUpdateContent']);
        
        Route::get('/planos', PlansListController::class)->name('cms.plans');
        Route::get('/planos/{plan}', PlanDetailController::class)->name('cms.plan-detail');
        Route::post('/planos/{plan}', [PlanDetailController::class, 'handleUpdatePlan']);
        
        Route::get('/modulos', ModulesListController::class)->name('cms.modules');
        Route::get('/modulos/{module}', ModuleDetailController::class)->name('cms.module-detail');
        Route::post('/modulos/{module}', [ModuleDetailController::class, 'handleUpdateModule']);
        
        Route::get('/informacoes-empresa', CompanyInfoController::class)->name('cms.company-infos');
        Route::post('/informacoes-empresa', [CompanyInfoController::class, 'handleUpdateCompanyData']);
    });
});

Route::get('/components', function () {
    return view('dev.components');
});

Route::fallback(PageNotFoundController::class);

Route::get('/teste', function(){
    abort(500);
});
