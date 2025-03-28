<?php

namespace App\Http\Controllers\CMS\modules\moduleDetail;

use App\Http\Controllers\GeneralController;
use App\Http\Requests\ModuleDetailCreateRequest;
use App\Http\Requests\ModuleDetailUpdateRequest;
use App\Models\Module;
use Illuminate\Http\Request;

class UpdateModuleController extends GeneralController
{
    public function __invoke(Module $module){
        return view('cms.modules.module-update', [
            'companyInfos' => $this->companyInfos,
            'module' => $module,
        ]);
    }

    public function handleUpdateModule(ModuleDetailUpdateRequest $request, Module $module){
        $validatedData = $request->validated();

        if(isset($validatedData['image'])){
            $path = $this->saveImageToStorage($validatedData['image']);
            $validatedData['image'] = $path;
        }

        $module->update($validatedData);

        return to_route('cms.modules');
    }
}
