<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        // ----------------------------------------------------------------------------------

        $heroSection = DB::table('sections')->insertGetId([
            'page_id' => 1,
            'type' => 'hero-section', 
            'order' => 1, 
        ]);
        
        DB::table('contents')->insert([
            'section_id' => $heroSection,
            'item_id' => null,
            'type' => 'subtitle', 
            'value' => 'Menos desafios, mais resultados', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $heroSection,
            'item_id' => null,
            'type' => 'hover-item', 
            'value' => 'Aumento de produtividade <i class="fa-solid fa-chart-line"></i>', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $heroSection,
            'item_id' => null,
            'type' => 'hover-item', 
            'value' => 'Redução de custos <i class="fa-solid fa-dollar-sign"></i>', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $heroSection,
            'item_id' => null,
            'type' => 'hover-item', 
            'value' => 'Padronização de processos <i class="fa-solid fa-list-check"></i>', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $heroSection,
            'item_id' => null,
            'type' => 'hover-item', 
            'value' => '<i class="fa-solid fa-folder-closed"></i> Centralização das informações', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $heroSection,
            'item_id' => null,
            'type' => 'hover-item', 
            'value' => '<i class="fa-solid fa-lock"></i> Segurança jurídica', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $heroSection,
            'item_id' => null,
            'type' => 'hover-item', 
            'value' => '<i class="fa-solid fa-users-gear"></i> Facilidade no controle', 
            'order' => 1, 
        ]);


        // DB::table('contents')->insert([
        //     'section_id' => $heroSection,
        //     'item_id' => null,
        //     'type' => 'title', 
        //     'value' => 'Tecnologia que <span class="text-sky-500">conecta</span>.', 
        //     'order' => 1, 
        // ]);

        // DB::table('contents')->insert([
        //     'section_id' => $heroSection,
        //     'item_id' => null,
        //     'type' => 'title', 
        //     'value' => 'Tecnologia que <span class="text-sky-500">evolui</span>.', 
        //     'order' => 2, 
        // ]);

        // DB::table('contents')->insert([
        //     'section_id' => $heroSection,
        //     'item_id' => null,
        //     'type' => 'title', 
        //     'value' => 'Tecnologia que <span class="text-sky-500">adapta</span>.', 
        //     'order' => 3, 
        // ]);

        // DB::table('contents')->insert([
        //     'section_id' => $heroSection,
        //     'item_id' => null,
        //     'type' => 'title', 
        //     'value' => 'Tecnologia que <span class="text-sky-500">facilita</span>.', 
        //     'order' => 4, 
        // ]);

        
        
        DB::table('contents')->insert([
            'section_id' => $heroSection,
            'item_id' => null,
            'type' => 'text', 
            'value' => 'Desenvolvemos soluções personalizadas que transformam <strong>desafios</strong> em <strong>praticidade</strong>.', 
            'order' => 3, 
        ]);
        
        // ----------------------------------------------------------------------------------

        $ourPartners = DB::table('sections')->insertGetId([
            'page_id' => 1,
            'type' => 'our-partners', 
            'order' => 2, 
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

        
        $historyNumbers = DB::table('sections')->insertGetId([
            'page_id' => 1,
            'type' => 'history-numbers', 
            'order' => 5, 
        ]);

        $HNitem1 = DB::table('items')->insertGetId([
            'section_id' => $historyNumbers,
            'order' => 1, 
        ]);

        $HNitem2 = DB::table('items')->insertGetId([
            'section_id' => $historyNumbers,
            'order' => 2, 
        ]);

        $HNitem3 = DB::table('items')->insertGetId([
            'section_id' => $historyNumbers,
            'order' => 3, 
        ]);

        $HNitem4 = DB::table('items')->insertGetId([
            'section_id' => $historyNumbers,
            'order' => 4, 
        ]);

        $HNitem5 = DB::table('items')->insertGetId([
            'section_id' => $historyNumbers,
            'order' => 5, 
        ]);

        $HNitem6 = DB::table('items')->insertGetId([
            'section_id' => $historyNumbers,
            'order' => 6, 
        ]);

        $HNitem7 = DB::table('items')->insertGetId([
            'section_id' => $historyNumbers,
            'order' => 7, 
        ]);

        $HNitem8 = DB::table('items')->insertGetId([
            'section_id' => $historyNumbers,
            'order' => 8, 
        ]);

        //

        DB::table('contents')->insert([
            'section_id' => $historyNumbers,
            'item_id' => $HNitem1,
            'type' => 'number', 
            'value' => '+1mi', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $historyNumbers,
            'item_id' => $HNitem1,
            'type' => 'text', 
            'value' => 'EPI’s entregues', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $historyNumbers,
            'item_id' => $HNitem2,
            'type' => 'number', 
            'value' => '+20', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $historyNumbers,
            'item_id' => $HNitem2,
            'type' => 'text', 
            'value' => 'anos de experiência', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $historyNumbers,
            'item_id' => $HNitem3,
            'type' => 'number', 
            'value' => '+500', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $historyNumbers,
            'item_id' => $HNitem3,
            'type' => 'text', 
            'value' => 'certificados de treinamento emitidos', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $historyNumbers,
            'item_id' => $HNitem4,
            'type' => 'number', 
            'value' => '+10000', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $historyNumbers,
            'item_id' => $HNitem4,
            'type' => 'text', 
            'value' => 'colaboradores cadastrados', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $historyNumbers,
            'item_id' => $HNitem5,
            'type' => 'number', 
            'value' => '+10000', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $historyNumbers,
            'item_id' => $HNitem5,
            'type' => 'text', 
            'value' => 'currículos recebidos', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $historyNumbers,
            'item_id' => $HNitem6,
            'type' => 'number', 
            'value' => '+300', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $historyNumbers,
            'item_id' => $HNitem6,
            'type' => 'text', 
            'value' => 'PRC atendidos pela NR 20', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $historyNumbers,
            'item_id' => $HNitem7,
            'type' => 'number', 
            'value' => '+20000', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $historyNumbers,
            'item_id' => $HNitem7,
            'type' => 'text', 
            'value' => 'documentos cadastrados', 
            'order' => 1, 
        ]);

            DB::table('contents')->insert([
            'section_id' => $historyNumbers,
            'item_id' => $HNitem8,
            'type' => 'number', 
            'value' => '+1000', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $historyNumbers,
            'item_id' => $HNitem8,
            'type' => 'text', 
            'value' => 'colaboradores recrutados', 
            'order' => 1, 
        ]);



        // ----------------------------------------------------------------------------------

        $ourPurpose = DB::table('sections')->insertGetId([
            'page_id' => 1,
            'type' => 'our-purpose', 
            'order' =>3, 
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

        $CTABanner = DB::table('sections')->insertGetId([
            'page_id' => 1,
            'type' => 'cta-banner', 
            'order' => 4, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $CTABanner,
            'item_id' => null,
            'type' => 'background-image', 
            'value' => 'assets/background-drawing.png', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $CTABanner,
            'item_id' => null,
            'type' => 'title', 
            'value' => 'Faça valer cada minuto.', 
            'order' => 2, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $CTABanner,
            'item_id' => null,
            'type' => 'text', 
            'value' => 'Simplifique a gestão de saúde e segurança no trabalho. Oferecemos ferramentas para um ambiente seguro, produtivo e dentro das regulamentações.', 
            'order' => 3, 
        ]);


        // ----------------------------------------------------------------------------------


        $testimonials = DB::table('sections')->insertGetId([
            'page_id' => 1,
            'type' => 'testimonials', 
            'order' => 5, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $testimonials,
            'item_id' => null,
            'type' => 'title', 
            'value' => 'Cases de sucesso', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $testimonials,
            'item_id' => null,
            'type' => 'image', 
            'value' => 'assets/testimonials.png', 
            'order' => 1, 
        ]);

        $item1 = DB::table('items')->insertGetId([
            'section_id' => $testimonials,
            'order' => 1, 
        ]);

        $item2 = DB::table('items')->insertGetId([
            'section_id' => $testimonials,
            'order' => 2, 
        ]);

        //

        DB::table('contents')->insert([
            'section_id' => $testimonials,
            'item_id' => $item1,
            'type' => 'text', 
            'value' => 'O sistema de gestão de segurança para a indústria automatizou grande parte dos nossos processos, facilitando o acompanhamento de conformidade e o controle de EPIs. Com fluxos de trabalho automáticos, auditorias e inspeções são realizadas de forma rápida e eficiente, garantindo que todas as normas de segurança sejam cumpridas sem complicações. A automação trouxe mais confiança e agilidade para nossas operações.', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $testimonials,
            'item_id' => $item1,
            'type' => 'author', 
            'value' => 'João da Silva', 
            'order' => 2, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $testimonials,
            'item_id' => $item1,
            'type' => 'author-company', 
            'value' => 'Dallemole', 
            'order' => 3, 
        ]);

        //

        DB::table('contents')->insert([
            'section_id' => $testimonials,
            'item_id' => $item2,
            'type' => 'text', 
            'value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint fugiat odio sunt iste molestias commodi natus nisi ullam voluptate impedit quo laudantium exercitationem, dolorum animi facilis iusto, consectetur perspiciatis deleniti?', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $testimonials,
            'item_id' => $item2,
            'type' => 'author', 
            'value' => 'Julia Santos', 
            'order' => 2, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $testimonials,
            'item_id' => $item2,
            'type' => 'author-company', 
            'value' => 'Dalleaço', 
            'order' => 3, 
        ]);

    }
}
