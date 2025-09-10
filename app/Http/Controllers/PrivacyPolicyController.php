<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyPolicyController extends GeneralController
{
    public function __invoke(){
        // $pageSections = $this->getPageSectionsWithContents('sobre-nos');

        // $timeline = $pageSections['timeline'];
        // $ourPartners = $pageSections['our-partners'];
        // $ourBusiness = $pageSections['our-business'];
        // $ourPurpose = $pageSections['our-purpose'];

        return view('site.privacy-policy', [
            'companyInfos' => $this->companyInfos,
            // 'timeline' => $timeline,
            // 'ourPartners' => $ourPartners,
            // 'ourBusiness' => $ourBusiness,
            // 'ourPurpose' => $ourPurpose,
        ]);
    }
}
