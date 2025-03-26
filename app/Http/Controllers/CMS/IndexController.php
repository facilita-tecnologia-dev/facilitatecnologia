<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Controllers\GeneralController;
use App\Models\Section;
use Illuminate\Http\Request;

class IndexController extends GeneralController
{
    public function __invoke(){

       

        return view('cms.index', [
            'companyInfos' => $this->companyInfos,
        ]);
    }
}
