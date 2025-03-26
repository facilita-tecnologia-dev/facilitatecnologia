<?php

namespace App\Http\Controllers\CMS\plans;

use App\Http\Controllers\GeneralController;
use App\Models\Plan;

class PlansListController extends GeneralController
{
      public function __invoke(){
        $plans = Plan::paginate(10);

        return view('cms.plans.list', [
            'companyInfos' => $this->companyInfos,
            'plans' => $plans,
        ]);
    }
}
