<?php

namespace App\Http\Controllers\CMS\modules;

use App\Http\Controllers\Controller;
use App\Http\Controllers\GeneralController;
use App\Models\Module;
use Illuminate\Http\Request;

class ModulesListController extends GeneralController
{
      public function __invoke(){
        $modules = Module::paginate(10);

        return view('cms.modules.list', [
            'companyInfos' => $this->companyInfos,
            'modules' => $modules,
        ]);
    }
}
