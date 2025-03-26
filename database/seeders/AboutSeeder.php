<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $timeline = DB::table('sections')->insertGetId([
            'page_id' => 2,
            'type' => 'timeline', 
            'order' => 6, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => null,
            'type' => 'title', 
            'value' => 'Nossa história', 
            'order' => 1, 
        ]);

        $item1 = DB::table('items')->insertGetId([
            'section_id' => $timeline,
            'order' => 1, 
        ]);

        $item2 = DB::table('items')->insertGetId([
            'section_id' => $timeline,
            'order' => 2, 
        ]);

        $item3 = DB::table('items')->insertGetId([
            'section_id' => $timeline,
            'order' => 3, 
        ]);

        $item4 = DB::table('items')->insertGetId([
            'section_id' => $timeline,
            'order' => 4, 
        ]);

        $item5 = DB::table('items')->insertGetId([
            'section_id' => $timeline,
            'order' => 5, 
        ]);

        $item6 = DB::table('items')->insertGetId([
            'section_id' => $timeline,
            'order' => 6, 
        ]);

        $item7 = DB::table('items')->insertGetId([
            'section_id' => $timeline,
            'order' => 7, 
        ]);

        $item8 = DB::table('items')->insertGetId([
            'section_id' => $timeline,
            'order' => 8, 
        ]);

        $item9 = DB::table('items')->insertGetId([
            'section_id' => $timeline,
            'order' => 9, 
        ]);
        
        // --------------------------------
        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item1,
            'type' => 'year', 
            'value' => '2012', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item1,
            'type' => 'title', 
            'value' => 'Início da prestação de serviço em consultoria', 
            'order' => 1, 
        ]);

        // DB::table('contents')->insert([
        //     'section_id' => $timeline,
        //     'item_id' => $item1,
        //     'type' => 'description', 
        //     'value' => 'Lorem ipsum domor amet lorem ipsum domor amet Lorem ipsum domor amet', 
        //     'order' => 1, 
        // ]);

        // --------------------------------
        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item2,
            'type' => 'year', 
            'value' => '2018', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item2,
            'type' => 'title', 
            'value' => 'Gestão de Recrutamento e Seleção', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item2,
            'type' => 'description', 
            'value' => 'Desenvolvimento do software de gestão conforme demandas dos clientes.', 
            'order' => 1, 
        ]);

        // --------------------------------
        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item3,
            'type' => 'year', 
            'value' => '2019', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item3,
            'type' => 'title', 
            'value' => 'Módulo de gestão de cargos e salários e avaliação de desempenho.', 
            'order' => 1, 
        ]);

        // DB::table('contents')->insert([
        //     'section_id' => $timeline,
        //     'item_id' => $item3,
        //     'type' => 'description', 
        //     'value' => 'Lorem ipsum domor amet lorem amet Lorem ipsum domor amet', 
        //     'order' => 1, 
        // ]);

        // --------------------------------
        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item4,
            'type' => 'year', 
            'value' => '2020', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item4,
            'type' => 'title', 
            'value' => 'Módulo de Gestão e Entrega de EPI\'s', 
            'order' => 1, 
        ]);

        // DB::table('contents')->insert([
        //     'section_id' => $timeline,
        //     'item_id' => $item4,
        //     'type' => 'description', 
        //     'value' => 'Lorem ipsum domor amet lorem amet Lorem ipsum domor amet', 
        //     'order' => 1, 
        // ]);

        // --------------------------------
        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item5,
            'type' => 'year', 
            'value' => '2021', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item5,
            'type' => 'title', 
            'value' => 'NR 20', 
            'order' => 1, 
        ]);

        // DB::table('contents')->insert([
        //     'section_id' => $timeline,
        //     'item_id' => $item5,
        //     'type' => 'description', 
        //     'value' => 'Lorem ipsum domor amet lorem amet Lorem ipsum domor amet', 
        //     'order' => 1, 
        // ]);

        // --------------------------------
        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item6,
            'type' => 'year', 
            'value' => '2022', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item6,
            'type' => 'title', 
            'value' => 'Gestão de treinamentos e almoxarifado.', 
            'order' => 1, 
        ]);

        // DB::table('contents')->insert([
        //     'section_id' => $timeline,
        //     'item_id' => $item6,
        //     'type' => 'description', 
        //     'value' => 'Lorem ipsum domor amet lorem amet Lorem ipsum domor amet', 
        //     'order' => 1, 
        // ]);

        // --------------------------------
        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item7,
            'type' => 'year', 
            'value' => '2023', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item7,
            'type' => 'title', 
            'value' => 'Gestão de Obras', 
            'order' => 1, 
        ]);

        // DB::table('contents')->insert([
        //     'section_id' => $timeline,
        //     'item_id' => $item7,
        //     'type' => 'description', 
        //     'value' => 'Lorem ipsum domor amet lorem amet Lorem ipsum domor amet', 
        //     'order' => 1, 
        // ]);

        // --------------------------------
        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item8,
            'type' => 'year', 
            'value' => '2024', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item8,
            'type' => 'title', 
            'value' => 'Gestão de Terceiros', 
            'order' => 1, 
        ]);

        // DB::table('contents')->insert([
        //     'section_id' => $timeline,
        //     'item_id' => $item8,
        //     'type' => 'description', 
        //     'value' => 'Lorem ipsum domor amet lorem amet Lorem ipsum domor amet', 
        //     'order' => 1, 
        // ]);

        // --------------------------------
        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item9,
            'type' => 'year', 
            'value' => '2025', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $timeline,
            'item_id' => $item9,
            'type' => 'title', 
            'value' => 'Gestão de saúde mental', 
            'order' => 1, 
        ]);

        // DB::table('contents')->insert([
        //     'section_id' => $timeline,
        //     'item_id' => $item9,
        //     'type' => 'description', 
        //     'value' => 'Lorem ipsum domor amet lorem amet Lorem ipsum domor amet', 
        //     'order' => 1, 
        // ]);

        // --------------------------------------------------------

        $ourPartners = DB::table('sections')->insertGetId([
            'page_id' => 2,
            'type' => 'our-partners', 
            'order' => 7, 
        ]);
        
        DB::table('contents')->insert([
            'section_id' => $ourPartners,
            'item_id' => null,
            'type' => 'title', 
            'value' => 'Grandes empresas escolhem a Facilita', 
            'order' => 1, 
        ]);
        
        DB::table('contents')->insert([
            'section_id' => $ourPartners,
            'item_id' => null,
            'type' => 'partner-logo', 
            'value' => 'assets/logoipsum-1.svg', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $ourPartners,
            'item_id' => null,
            'type' => 'partner-logo', 
            'value' => 'assets/logoipsum-2.svg', 
            'order' => 2, 
        ]);
        
        DB::table('contents')->insert([
            'section_id' => $ourPartners,
            'item_id' => null,
            'type' => 'partner-logo', 
            'value' => 'assets/logoipsum-3.svg', 
            'order' => 3, 
        ]);
        
        DB::table('contents')->insert([
            'section_id' => $ourPartners,
            'item_id' => null,
            'type' => 'partner-logo', 
            'value' => 'assets/logoipsum-4.svg', 
            'order' => 4, 
        ]);
        
        DB::table('contents')->insert([
            'section_id' => $ourPartners,
            'item_id' => null,
            'type' => 'partner-logo', 
            'value' => 'assets/logoipsum-5.svg', 
            'order' => 5, 
        ]);
        
        
        // ----------------------------------------------------------------------------------

        $ourBusiness = DB::table('sections')->insertGetId([
            'page_id' => 2,
            'type' => 'our-business', 
            'order' => 1, 
        ]);
        
        DB::table('contents')->insert([
            'section_id' => $ourBusiness,
            'item_id' => null,
            'type' => 'title', 
            'value' => 'Nosso negócio', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $ourBusiness,
            'item_id' => null,
            'type' => 'text', 
            'value' => ' Nosso sistema é a solução completa para simplificar e integrar a gestão de RH e a segurança e saúde do trabalho (SST) dentro da sua empresa. Com ferramentas intuitivas e automatizadas, você pode gerenciar desde o controle de documentos e treinamentos até o cumprimento das normas regulatórias, garantindo um ambiente de trabalho seguro e produtivo. Tudo isso em uma única plataforma, que facilita a comunicação entre equipes, reduz burocracias e aumenta a eficiência operacional.<br/><br/>Seja para otimizar processos de RH, prevenir acidentes ou garantir a conformidade com as leis trabalhistas, nosso sistema é o parceiro ideal para transformar a gestão da sua empresa em algo simples, ágil e eficaz.', 
            'order' => 1, 
        ]);


        // ----------------------------------------------------------------------------------

        $ourPurpose = DB::table('sections')->insertGetId([
            'page_id' => 2,
            'type' => 'our-purpose', 
            'order' => 9, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $ourPurpose,
            'item_id' => null,
            'type' => 'subtitle', 
            'value' => 'Nosso propósito', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $ourPurpose,
            'item_id' => null,
            'type' => 'title', 
            'value' => 'Facilitar processos por meio da tecnologia.', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $ourPurpose,
            'item_id' => null,
            'type' => 'diagram-image', 
            'value' => 'assets/diagram-facilita.svg', 
            'order' => 1, 
        ]);

        // ----------------------------------------------------------------------------------
    }
}
