<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends GeneralController
{
    public function __invoke(){
        $pageSections = $this->getPageSectionsWithContents('home');


        $heroSection = $pageSections['hero-section'];
        $ourPartners = $pageSections['our-partners'];
        $ourPurpose = $pageSections['our-purpose'];
        $CTABanner = $pageSections['cta-banner'];
        $testimonials = $pageSections['testimonials'];

        dump($pageSections);

        return view('home', [
            'heroSection' => $heroSection,
            'ourPartners' => $ourPartners,
            'ourPurpose' => $ourPurpose,
            'CTABanner' => $CTABanner,
            'testimonials' => $testimonials,
        ]);
    }
}
