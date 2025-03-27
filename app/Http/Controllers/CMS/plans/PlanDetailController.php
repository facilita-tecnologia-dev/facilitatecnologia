<?php

namespace App\Http\Controllers\CMS\plans;

use App\Http\Controllers\Controller;
use App\Http\Controllers\GeneralController;
use App\Http\Requests\PlanDetailUpdateRequest;
use App\Models\Module;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlanDetailController extends GeneralController
{
    public function __invoke(Plan $plan){
        $modules = Module::all();

        return view('cms.plans.plan-detail', [
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

        $plan->name = $validatedData['name'];
        $plan->slug = $validatedData['slug'];
        $plan->description = $validatedData['description'];
        $plan->price = $validatedData['price'];


        
        $plan->save();

        return back();
    }
}
