<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contactForm = DB::table('sections')->insertGetId([
            'page_id' => 4,
            'type' => 'contact-form', 
            'order' => 1, 
        ]);
        
        DB::table('contents')->insert([
            'section_id' => $contactForm,
            'item_id' => null,
            'type' => 'title', 
            'value' => 'Contate-nos', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $contactForm,
            'item_id' => null,
            'type' => 'description', 
            'value' => 'Seu feedback é <strong>valioso</strong>! Preencha o formulário e retornaremos seu contato em breve.<br>Sua mensagem será encaminhada para nosso whatsapp.', 
            'order' => 1, 
        ]);

        $systemStatus = DB::table('sections')->insertGetId([
            'page_id' => 4,
            'type' => 'system-status', 
            'order' => 1, 
        ]);
        
        DB::table('contents')->insert([
            'section_id' => $systemStatus,
            'item_id' => null,
            'type' => 'title', 
            'value' => 'Status do sistema', 
            'order' => 1, 
        ]);
    }
}
