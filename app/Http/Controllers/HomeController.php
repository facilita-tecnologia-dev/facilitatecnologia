<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends GeneralController
{
    public function __invoke(){
        $pageSections = $this->getPageSectionsWithContents('home');

        // dump($pageSections);
        $heroSection = $pageSections['hero-section'];
        $ourPartners = $pageSections['our-partners'];
        $ourHistoryNumbers = $pageSections['history-numbers'];
        $ourPurpose = $pageSections['our-purpose'];
        $CTABanner = $pageSections['cta-banner'];
        $testimonials = $pageSections['testimonials'];

        return view('home', [
            'companyInfos' => $this->companyInfos,
            'heroSection' => $heroSection,
            'ourPartners' => $ourPartners,
            'ourHistoryNumbers' => $ourHistoryNumbers,
            'ourPurpose' => $ourPurpose,
            'CTABanner' => $CTABanner,
            'testimonials' => $testimonials,
        ]);
    }
}
