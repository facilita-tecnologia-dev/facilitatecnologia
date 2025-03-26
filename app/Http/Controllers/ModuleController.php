<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends GeneralController
{
    public function __invoke(Module $module){
        return view('module-detail', [
            'companyInfos' => $this->companyInfos,
            'module' => $module,
        ]);
    }
}
