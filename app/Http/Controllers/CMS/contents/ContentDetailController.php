<?php

namespace App\Http\Controllers\CMS\contents;

use App\Http\Controllers\Controller;
use App\Http\Controllers\GeneralController;
use App\Models\Content;
use App\Models\Page;
use App\Models\Section;
use Illuminate\Http\Request;

class ContentDetailController extends GeneralController
{
    public function __invoke(Content $content){
        $sectionsToSelect = $this->getSectionsToSelect();

        return view('cms.contents.content-detail', [
            'companyInfos' => $this->companyInfos,
            'content' => $content,
            'sectionsToSelect' => $sectionsToSelect,
        ]);
    }

    public function handleUpdateContent(Request $request, Content $content){
        // dd($request->all());
        $contentDB = Content::where('id', '=', $content->id)->first();
        $contentDB->type = $request->type;
        $contentDB->value = $request->value;
        $contentDB->order = $request->order;
        $contentDB->section_id = $request->section_id;
        // dd($request->all(), $contentDB);

        $contentDB->save();

        return back();
    }

    private function getSectionsToSelect(){
        $sections = Section::all();

        $organizedSections = [];

        foreach($sections as $section){
            $organizedSections[] = [
                'option' => $section['type'] . " (" .$section->page[0]['title'] . ")", 
                'value' => $section['id']
            ];
        }

        return $organizedSections;
    }
}
