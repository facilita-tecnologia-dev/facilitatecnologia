<?php

namespace App\Http\Controllers\CMS\plans;

use App\Http\Controllers\GeneralController;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlansListController extends GeneralController
{
    public function __invoke(Request $request){
        $search = $request->search;

        $plans = Plan::when($search, function($query) use($search) {
            return $query->where('name', 'like', "%$search%")->orWhere('slug', 'like', "%$search%");
        })->paginate(10)->appends(['search' => $search]);
        

        return view('cms.plans.list', [
            'companyInfos' => $this->companyInfos,
            'plans' => $plans,
            'search' => $search,
        ]);
    }
}
