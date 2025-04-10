<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends GeneralController
{
    public function __invoke()
    {
        $pageSections = $this->getPageSectionsWithContents('contato');        
        
        $contactForm = $pageSections['contact-form'];
        $systemStatusContent = $pageSections['system-status'];
        $systemStatusCode = $this->getSystemStatusCode();

        return view('contact', [
            'companyInfos' => $this->companyInfos,
            'contactForm' => $contactForm,
            'systemStatusContent' => $systemStatusContent,
            'systemStatusCode' => $systemStatusCode,
        ]);  
    }

    public function handleContactSubmit(Request $request){
        $validatedMessage = $request->validate([
            'message' => ['required'],
        ]);

        // dd($validatedMessage['message']);

        // Numero real ->

        // Número de telefone (com código do país, sem + ou espaços)
        $telefone = "5551989269827";
        
        // Codifica a mensagem para URL
        // $mensagemCodificada = urlencode($validatedMessage['message']);
        
        // Monta a URL do WhatsApp
        $url = "https://wa.me/{$telefone}?text=Por%20favor,%20eu%20gostaria%20de%20uma%20demonstração%20do%20produto!";
        
        // Faz o redirect
        return redirect()->away($url);
    }

    private function getSystemStatusCode(){
        $systemStatus = DB::table('system_status')->first();

        return $systemStatus->system_status_code;
    }
    
}
