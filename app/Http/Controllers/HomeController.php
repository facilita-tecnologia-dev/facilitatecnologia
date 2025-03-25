<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends GeneralController
{
    public function __invoke(){
        dump($this->companyInfos);
        $pageSections = $this->getPageSectionsWithContents('home');

        $heroSection = $pageSections['hero-section'];
        $ourPartners = $pageSections['our-partners'];
        $ourPurpose = $pageSections['our-purpose'];
        $CTABanner = $pageSections['cta-banner'];
        $testimonials = $pageSections['testimonials'];

        return view('home', [
            'companyInfos' => $this->companyInfos,
            'heroSection' => $heroSection,
            'ourPartners' => $ourPartners,
            'ourPurpose' => $ourPurpose,
            'CTABanner' => $CTABanner,
            'testimonials' => $testimonials,
        ]);
    }
}
