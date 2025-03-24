<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Section;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    protected function getPageSections($slug){
        $pageWithSections = Page::with('sections.contents')
        ->where('slug', $slug)
        ->first();

        return $pageWithSections;
    }
}
