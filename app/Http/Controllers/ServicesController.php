<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicesController extends GeneralController
{
    public function __invoke(){
        $pageSections = $this->getPageSectionsWithContents('solucoes');

        $ourPlansContent = $pageSections['our-plans'];
        $ourPlansList = $this->getPlans();
        $ourPlansColors = ['bg-emerald-300', 'bg-sky-300', 'bg-purple-300', 'bg-rose-300', 'bg-yellow-300', 'bg-indigo-300', 'bg-teal-300', 'bg-lime-300']; 

        $CTABanner = $pageSections['cta-banner'];
        
        return view('site.services', [
            'companyInfos' => $this->companyInfos,
            'ourPlansContent' => $ourPlansContent,
            'ourPlansList' => $ourPlansList,
            'ourPlansColors' => $ourPlansColors,
            'CTABanner' => $CTABanner,
        ]);
    }

    private function getPlans(){
        $plans = Plan::with('modules')->get();

        return $plans;
    }
}
