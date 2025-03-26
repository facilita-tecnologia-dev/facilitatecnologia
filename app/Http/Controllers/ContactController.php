<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends GeneralController
{
    public function __invoke(Request $request)
    {
        $pageSections = $this->getPageSectionsWithContents('contato');        
        
        // dd($pageSections);
        $contactForm = $pageSections['contact-form'];
        $systemStatusContent = $pageSections['system-status'];
        $systemStatusCode = $this->getSystemStatusCode();

        // FAQ
        // $FAQSearch = $request->search ?? null;
        // $FAQContent = $pageSections['FAQ'];
        // $FAQList = $this->getFrequentlyAskedQuestions($FAQSearch);
        
        return view('contact', [
            'companyInfos' => $this->companyInfos,
            'contactForm' => $contactForm,
            'systemStatusContent' => $systemStatusContent,
            'systemStatusCode' => $systemStatusCode,
            // 'FAQSearch' => $FAQSearch,
            // 'FAQContent' => $FAQContent,
            // 'FAQList' => $FAQList,
        ]);  
    }

    public function handleContactSubmit(Request $request){
        // dd($request->all());

        $validatedMessage = $request->validate([
            'message' => ['required'],
        ]);

        dd($validatedMessage['message']);

        // Numero real ->

        // Número de telefone (com código do país, sem + ou espaços)
        $telefone = "5554997026820";
        
        // Codifica a mensagem para URL
        $mensagemCodificada = urlencode($validatedMessage->message);
        
        // Monta a URL do WhatsApp
        $url = "https://wa.me/{$telefone}?text={$mensagemCodificada}";
        
        // Faz o redirect
        return redirect()->away($url);
    }

    private function getFrequentlyAskedQuestions($search = null){
        $FAQ = DB::table('FAQ')
        ->when($search, function($query) use($search) {
            return $query->where('question', 'like', "%$search%");
        })->paginate(5)->appends(['search' => $search]);;

        return $FAQ;
    }

    private function getSystemStatusCode(){
        $systemStatus = DB::table('system_status')->first();

        return $systemStatus->system_status_code;
    }
    
}
