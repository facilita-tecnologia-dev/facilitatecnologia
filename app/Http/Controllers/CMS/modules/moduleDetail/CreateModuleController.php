<?php

namespace App\Http\Controllers\CMS\modules\moduleDetail;

use App\Http\Controllers\GeneralController;
use App\Http\Requests\ModuleDetailCreateRequest;
use App\Http\Requests\ModuleDetailUpdateRequest;
use App\Models\Module;
use Illuminate\Http\Request;

class CreateModuleController extends GeneralController
{
    public function __invoke(Module $module){
        return view('cms.modules.module-create', [
            'companyInfos' => $this->companyInfos,
        ]);
    }

    public function handleCreateModule(ModuleDetailCreateRequest $request){
        Module::create($request->validated());

        return to_route('cms.modules');
    }
}
