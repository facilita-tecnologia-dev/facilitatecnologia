<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Controllers\GeneralController;
use App\Models\Content;
use App\Models\Module;
use App\Models\Plan;
use App\Models\Section;
use Illuminate\Http\Request;

class IndexController extends GeneralController
{
    public function __invoke(){
        $sectionsCount = Section::count();
        $contentsCount = Content::count();
        $plansCount = Plan::count();
        $modulesCount = Module::count();

        return view('cms.index', [
            'companyInfos' => $this->companyInfos,
            'sectionsCount' => $sectionsCount,
            'contentsCount' => $contentsCount,
            'plansCount' => $plansCount,
            'modulesCount' => $modulesCount,
        ]);
    }
}
