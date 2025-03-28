<?php

namespace App\Http\Controllers\CMS\plans\planDetail;

use App\Http\Controllers\GeneralController;
use App\Http\Requests\PlanDetailUpdateRequest;
use App\Models\Module;
use App\Models\Plan;
use Illuminate\Support\Facades\DB;

class UpdatePlanController extends GeneralController
{
    public function __invoke(Plan $plan){
        $modules = Module::all();

        return view('cms.plans.plan-update', [
            'companyInfos' => $this->companyInfos,
            'plan' => $plan,
            'modules' => $modules,
        ]);
    }

    public function handleUpdatePlan(PlanDetailUpdateRequest $request, Plan $plan){
        $validatedData = $request->validated();

       DB::table('plan_modules')->where('plan_id', '=', $plan->id)->delete();

        foreach($validatedData['modules'] as $module){
            DB::table('plan_modules')->insert([
                'plan_id' => $plan->id,
                'module_id' => $module
            ]);
        }

        unset($validatedData['modules']);

        $plan->update($validatedData);

        return to_route('cms.plans');
    }
}
