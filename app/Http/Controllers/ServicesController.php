<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends GeneralController
{
    public function __invoke(){
        $pageSections = $this->getPageSectionsWithContents('servicos');

        $introduction = $pageSections['introduction'];
        $ourPlans = $pageSections['our-plans'];
        $CTABanner = $pageSections['cta-banner'];

        return view('services', [
            'companyInfos' => $this->companyInfos,
            'introduction' => $introduction,
            'ourPlans' => $ourPlans,
            'CTABanner' => $CTABanner,
        ]);
    }
}
