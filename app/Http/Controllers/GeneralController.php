<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Support\Facades\DB;

class GeneralController extends Controller
{
    protected $companyInfos;

    public function __construct()
    {
        $this->companyInfos = DB::table('company_infos')->get()->groupBy('type')->toArray();
    }

    protected function getPageSectionsWithContents(string $slug): array{
        $page = Page::with([
            'sections' => function($query) {
                $query->orderBy('order', 'asc');
            },
            'sections.contents' => function($query) {
                $query->whereNull('item_id')
                ->orderBy('order', 'asc');
            },
            'sections.items' => function($query) {
                $query->orderBy('order', 'asc');
            },
            'sections.items.contents' => function($query) {
                $query->orderBy('order', 'asc');
            },
        ])->where('slug', $slug)->firstOrFail();

        $organizedSections = [];

        foreach ($page->sections as $section) {
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

}
