<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends GeneralController
{
    public function __invoke(Plan $plan)
    {
        $planModules = $plan->modules()->get();
        
        return view('site.plan-detail', [
            'companyInfos' => $this->companyInfos,
            'plan' => $plan,
            'planModules' => $planModules,
        ]);
    }
}
