<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends GeneralController
{
    public function __invoke(){
        $pageSections = $this->getPageSectionsWithContents('servicos');

       
        $ourPlans = $pageSections['our-plans'];
        $CTABanner = $pageSections['cta-banner'];

        return view('services', [
            'companyInfos' => $this->companyInfos,
            'ourPlans' => $ourPlans,
            'CTABanner' => $CTABanner,
        ]);
    }
}
