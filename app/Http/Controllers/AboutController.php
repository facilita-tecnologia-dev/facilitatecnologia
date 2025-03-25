<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends GeneralController
{
    public function __invoke(){
        $pageSections = $this->getPageSectionsWithContents('sobre-nos');

        $timeline = $pageSections['timeline'];
        $ourPartners = $pageSections['our-partners'];
        $ourTeam = $pageSections['our-team'];
        $ourPurpose = $pageSections['our-purpose'];

        dump($pageSections);

        return view('about', [
            'timeline' => $timeline,
            'ourPartners' => $ourPartners,
            'ourTeam' => $ourTeam,
            'ourPurpose' => $ourPurpose,
        ]);
    }
}
