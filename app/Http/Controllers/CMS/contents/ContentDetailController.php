<?php

namespace App\Http\Controllers\CMS\contents;

use App\Http\Controllers\GeneralController;
use App\Http\Requests\ContentDetailUpdateRequest;
use App\Models\Content;
use App\Models\Section;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ContentDetailController extends GeneralController
{
    public function __invoke(Content $content){
        $sectionsToSelect = $this->getSectionsToSelect();

        $contentType = '';
        if(str_starts_with($content->value, '/storage')){
            $contentType = 'file';
        } else{
            $contentType = 'text';
        }

        return view('cms.contents.content-detail', [
            'companyInfos' => $this->companyInfos,
            'content' => $content,
            'sectionsToSelect' => $sectionsToSelect,
            'contentType' => $contentType,
        ]);
    }

    public function handleUpdateContent(ContentDetailUpdateRequest $request, Content $content){
        $validatedData = $request->validated();

        $content->order = $validatedData['order'];
        $content->section_id = $validatedData['section_id'];

        if($validatedData['value'] instanceof UploadedFile){
            $path = $validatedData['value']->store('images', 'public');
            $url = Storage::url($path);

            $content->value = $url;
            
        } else{
            $content->value = $validatedData['value'];
        }

        $content->save();

        return to_route('cms.contents');
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
