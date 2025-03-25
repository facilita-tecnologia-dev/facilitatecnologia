<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sections')->insert([
            'page_id' => 3,
            'type' => 'introduction', 
            'order' => 1, 
        ]);
        
        DB::table('contents')->insert([
            'section_id' => 10,
            'item_id' => null,
            'type' => 'title', 
            'value' => 'O que é oferecemos?', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 10,
            'item_id' => null,
            'type' => 'text', 
            'value' => ' Nosso sistema é a solução completa para simplificar e integrar a gestão de RH e a segurança e saúde do trabalho (SST) dentro da sua empresa. Com ferramentas intuitivas e automatizadas, você pode gerenciar desde o controle de documentos e treinamentos até o cumprimento das normas regulatórias, garantindo um ambiente de trabalho seguro e produtivo. Tudo isso em uma única plataforma, que facilita a comunicação entre equipes, reduz burocracias e aumenta a eficiência operacional.<br/><br/>Seja para otimizar processos de RH, prevenir acidentes ou garantir a conformidade com as leis trabalhistas, nosso sistema é o parceiro ideal para transformar a gestão da sua empresa em algo simples, ágil e eficaz.', 
            'order' => 1, 
        ]);


        DB::table('sections')->insert([
            'page_id' => 3,
            'type' => 'our-plans', 
            'order' => 2, 
        ]);
        
        DB::table('contents')->insert([
            'section_id' => 11,
            'item_id' => null,
            'type' => 'title', 
            'value' => 'Nossos planos', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 11,
            'item_id' => null,
            'type' => 'description', 
            'value' => 'Conheça os nossos planos e escolha o mais apropriado para o seu negócio.', 
            'order' => 1, 
        ]);


        DB::table('sections')->insert([
            'page_id' => 3,
            'type' => 'cta-banner', 
            'order' => 3, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 12,
            'item_id' => null,
            'type' => 'background-image', 
            'value' => 'assets/background-drawing.png', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 12,
            'item_id' => null,
            'type' => 'title', 
            'value' => 'Faça valer cada minuto.', 
            'order' => 2, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 12,
            'item_id' => null,
            'type' => 'text', 
            'value' => 'Simplifique a gestão de saúde e segurança no trabalho. Oferecemos ferramentas para um ambiente seguro, produtivo e dentro das regulamentações.', 
            'order' => 3, 
        ]);

    }
}
