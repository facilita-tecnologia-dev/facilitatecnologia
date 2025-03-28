<?php

namespace App\Http\Controllers\CMS\modules;

use App\Http\Controllers\GeneralController;
use App\Http\Requests\ModuleDetailUpdateRequest;
use App\Models\Module;

class ModuleDetailController extends GeneralController
{
    public function __invoke(Module $module){
        return view('cms.modules.module-detail', [
            'companyInfos' => $this->companyInfos,
            'module' => $module,
        ]);
    }

    public function handleUpdateModule(ModuleDetailUpdateRequest $request, Module $module){
        $validatedData = $request->validated();

        // dd($validatedData);
        $module->name = $validatedData['name'];
        $module->slug = $validatedData['slug'];
        $module->description = $validatedData['description'];
        $module->content = $validatedData['content'];

        if($validatedData['image']){
            $path = $this->saveImageToStorage($validatedData['image']);
            $module->image = $path;
        }

        $module->save();

        return to_route('cms.modules');
    }
}
