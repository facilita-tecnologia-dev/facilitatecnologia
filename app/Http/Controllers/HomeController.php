<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends GeneralController
{
    public function __invoke(){
        $pageWithSections = $this->getPageSections('home');

        
        $heroSection = $pageWithSections->sections()->where('type', '=', 'hero-section')->with('contents')->first();
        
        return view('home', [
            'heroSection' => $heroSection->contents->groupBy('type'),
        ]);
    }
}
