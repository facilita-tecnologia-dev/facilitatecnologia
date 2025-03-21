<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __invoke()
    {
        return view('contact');   
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
}
