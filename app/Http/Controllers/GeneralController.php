<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class GeneralController extends Controller
{
    protected $companyInfos;

    public function __construct()
    {
        $this->companyInfos = DB::table('company_infos')->get()->groupBy('type')->toArray();
    }

    protected function getPageSectionsWithContents(string $slug): array{
        $page = Page::where('slug', '=', $slug)->first();
        $pageSections = $page->sections()->with(['contents' => fn($query) => $query->whereNull('item_id'), 'items', 'items.contents'])->get();

        $organizedSections = [];

        foreach ($pageSections as $section) {
            $sectionContents = $section->contents->groupBy('type');

            foreach($sectionContents as $content){
                if(count($content) < 2){
                    $organizedSections[$section->type][$content[0]->type] = $content[0];
                } else{
                    $organizedSections[$section->type][$content[0]->type] = $content->toArray();
                }
            }
        
            if(count($section->items) > 0){
                foreach($section->items as $i => $item){
                    $organizedItem = $item->contents->groupBy('type')->toArray();
                    
                    foreach($organizedItem as $key => $content){
                        $organizedItem[$key] = $content[0];
                    }

                    $organizedSections[$section->type]['items'][] = $organizedItem;
                }
            } 
        }
        
        return $organizedSections;
    }

    protected function saveImageToStorage($image){
        $path = $image->store('images', 'public');
        $url = Storage::url($path);

        return $url;
    }

}
