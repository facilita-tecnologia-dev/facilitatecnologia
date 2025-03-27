<?php

namespace App\Http\Controllers\CMS\contents;

use App\Http\Controllers\GeneralController;
use App\Models\Content;
use App\Models\Section;
use Illuminate\Http\Request;

class ContentsListController extends GeneralController
{
    public function __invoke(Request $request){
        $search = $request->search;

        $contents = Content::when($search, function($query) use($search) {
            return $query->where('type', 'like', "%$search%")->orWhere('value', 'like', "%$search%");
        })->paginate(10)->appends(['search' => $search]);

        return view('cms.contents.list', [
            'companyInfos' => $this->companyInfos,
            'contents' => $contents,
            'search' => $search,
        ]);
    }
}
