<?php

namespace App\Http\Controllers\CMS\plans\planDetail;

use App\Http\Controllers\GeneralController;
use App\Http\Requests\PlanDetailCreateRequest;
use App\Http\Requests\PlanDetailUpdateRequest;
use App\Models\Module;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreatePlanController extends GeneralController
{
    public function __invoke(){
        $modules = Module::all();
        
        return view('cms.plans.plan-create', [
            'companyInfos' => $this->companyInfos,
            'modules' => $modules,
        ]);
    }

    public function handleCreatePlan(PlanDetailCreateRequest $request){
        $planWithoutModules = $request->validated();
        unset($planWithoutModules['modules']);

        $plan = Plan::create($planWithoutModules);

        foreach($request->validated()['modules'] as $module){
            DB::table('plan_modules')->insert([
                'plan_id' => $plan->id,
                'module_id' => $module
            ]);
        }

        return to_route('cms.plans');
    }
}
