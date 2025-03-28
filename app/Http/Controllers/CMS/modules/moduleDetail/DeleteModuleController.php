<?php

namespace App\Http\Controllers\CMS\modules\moduleDetail;

use App\Http\Controllers\GeneralController;
use App\Http\Requests\ModuleDetailCreateRequest;
use App\Http\Requests\ModuleDetailUpdateRequest;
use App\Models\Module;
use Illuminate\Http\Request;

class DeleteModuleController extends GeneralController
{
    public function __invoke(Module $module){
        $module->delete();

        return to_route('cms.modules');
    }
}
