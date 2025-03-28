<?php

namespace App\Http\Controllers\CMS\plans\planDetail;

use App\Http\Controllers\GeneralController;
use App\Models\Plan;

class DeletePlanController extends GeneralController
{
    public function __invoke(Plan $plan){
        $plan->delete();

        return to_route('cms.plans');
    }
}
