<?php

namespace App\Http\Controllers\CMS\Sections;

use App\Http\Controllers\GeneralController;
use App\Models\Section;

class SectionsListController extends GeneralController
{
    public function __invoke(){
        $sections = Section::paginate(10);

        return view('cms.sections.list', [
            'companyInfos' => $this->companyInfos,
            'sections' => $sections,
        ]);
    }
}
