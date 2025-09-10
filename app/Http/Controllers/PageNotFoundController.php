<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageNotFoundController extends GeneralController
{
    public function __invoke(){
        return view('errors.404', [
            'companyInfos' => $this->companyInfos,
        ]);
    }
}
