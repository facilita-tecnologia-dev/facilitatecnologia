<?php

namespace App\Http\Controllers\CMS\modules;

use App\Http\Controllers\Controller;
use App\Http\Controllers\GeneralController;
use App\Models\Module;
use Illuminate\Http\Request;

class ModulesListController extends GeneralController
{
      public function __invoke(Request $request){
        $search = $request->search;

        $modules = Module::when($search, function($query) use($search) {
            return $query->where('name', 'like', "%$search%")->orWhere('slug', 'like', "%$search%");
        })->paginate(10)->appends(['search' => $search]);

        return view('cms.modules.list', [
            'companyInfos' => $this->companyInfos,
            'modules' => $modules,
            'search' => $search,
        ]);
    }
}
