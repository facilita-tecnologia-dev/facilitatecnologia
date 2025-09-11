<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CMS\CompanyInfoController;
use App\Http\Controllers\CMS\contents\ContentDetailController;
use App\Http\Controllers\CMS\contents\ContentsListController;
use App\Http\Controllers\CMS\IndexController;
use App\Http\Controllers\CMS\LoginController;
use App\Http\Controllers\CMS\LogoutController;
use App\Http\Controllers\CMS\modules\list\ModulesListController;
use App\Http\Controllers\CMS\modules\moduleDetail\CreateModuleController;
use App\Http\Controllers\CMS\modules\moduleDetail\DeleteModuleController;
use App\Http\Controllers\CMS\modules\moduleDetail\UpdateModuleController;
use App\Http\Controllers\CMS\plans\list\PlansListController;
use App\Http\Controllers\CMS\plans\planDetail\CreatePlanController;
use App\Http\Controllers\CMS\plans\planDetail\DeletePlanController;
use App\Http\Controllers\CMS\plans\planDetail\UpdatePlanController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\PageNotFoundController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ServicesController;
use App\Http\Middleware\CMS\AuthMiddleware;
use App\Http\Middleware\CMS\GuestMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/sobre-nos', AboutController::class)->name('about');
Route::get('/solucoes', ServicesController::class)->name('services');
Route::get('/contato', ContactController::class)->name('contact');
Route::view('/politica-de-privacidade', 'site.privacy-policy.index')->name('privacy-policy');
Route::view('/termos-de-uso', 'site.terms-of-use.index')->name('terms-of-use');
// Route::get('/plano/{plan}', PlanController::class)->name('plan-detail');
// Route::get('/modulo/{module}', ModuleController::class)->name('module-detail');

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
        Route::get('/planos/criar', CreatePlanController::class)->name('cms.plan-create');
        Route::post('/planos/criar', [CreatePlanController::class, 'handleCreatePlan']);

        Route::get('/planos/{plan}', UpdatePlanController::class)->name('cms.plan-detail');
        Route::put('/planos/{plan}', [UpdatePlanController::class, 'handleUpdatePlan']);
        
        Route::get('/modulos/{plan}/deletar', DeletePlanController::class)->name('cms.plan-delete');

        Route::get('/modulos', ModulesListController::class)->name('cms.modules');

        Route::get('/modulos/criar', CreateModuleController::class)->name('cms.module-create');
        Route::post('/modulos/criar', [CreateModuleController::class, 'handleCreateModule']);

        Route::get('/modulos/{module}', UpdateModuleController::class)->name('cms.module-detail');
        Route::put('/modulos/{module}', [UpdateModuleController::class, 'handleUpdateModule']);

        Route::get('/modulos/{module}/deletar', DeleteModuleController::class)->name('cms.module-delete');
        
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
