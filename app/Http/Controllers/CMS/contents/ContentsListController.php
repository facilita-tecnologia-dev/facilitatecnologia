<?php

namespace App\Http\Controllers\CMS\contents;

use App\Http\Controllers\GeneralController;
use App\Models\Content;
use App\Models\Section;

class ContentsListController extends GeneralController
{
    public function __invoke(){
        $contents = Content::paginate(10);

        return view('cms.contents.list', [
            'companyInfos' => $this->companyInfos,
            'contents' => $contents,
        ]);
    }
}
