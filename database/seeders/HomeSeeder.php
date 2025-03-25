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

        DB::table('sections')->insert([
            'page_id' => 1,
            'type' => 'hero-section', 
            'order' => 1, 
        ]);
        
        DB::table('contents')->insert([
            'section_id' => 1,
            'item_id' => null,
            'type' => 'subtitle', 
            'value' => 'Menos desafios, mais resultados', 
            'order' => 1, 
        ]);


        // DB::table('contents')->insert([
        //     'section_id' => 1,
        //     'item_id' => null,
        //     'type' => 'title', 
        //     'value' => 'Tecnologia que <span class="text-sky-500">conecta</span>.', 
        //     'order' => 1, 
        // ]);

        // DB::table('contents')->insert([
        //     'section_id' => 1,
        //     'item_id' => null,
        //     'type' => 'title', 
        //     'value' => 'Tecnologia que <span class="text-sky-500">evolui</span>.', 
        //     'order' => 2, 
        // ]);

        // DB::table('contents')->insert([
        //     'section_id' => 1,
        //     'item_id' => null,
        //     'type' => 'title', 
        //     'value' => 'Tecnologia que <span class="text-sky-500">adapta</span>.', 
        //     'order' => 3, 
        // ]);

        // DB::table('contents')->insert([
        //     'section_id' => 1,
        //     'item_id' => null,
        //     'type' => 'title', 
        //     'value' => 'Tecnologia que <span class="text-sky-500">facilita</span>.', 
        //     'order' => 4, 
        // ]);

        
        
        DB::table('contents')->insert([
            'section_id' => 1,
            'item_id' => null,
            'type' => 'text', 
            'value' => 'Desenvolvemos soluções personalizadas que transformam <strong>desafios</strong> em <strong>praticidade</strong>.', 
            'order' => 3, 
        ]);
        
        // ----------------------------------------------------------------------------------

        DB::table('sections')->insert([
            'page_id' => 1,
            'type' => 'our-partners', 
            'order' => 2, 
        ]);
        
        DB::table('contents')->insert([
            'section_id' => 2,
            'item_id' => null,
            'type' => 'title', 
            'value' => 'Grandes empresas escolhem a Facilita', 
            'order' => 1, 
        ]);
        
        DB::table('contents')->insert([
            'section_id' => 2,
            'item_id' => null,
            'type' => 'partner-logo', 
            'value' => 'assets/logoipsum-1.svg', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 2,
            'item_id' => null,
            'type' => 'partner-logo', 
            'value' => 'assets/logoipsum-2.svg', 
            'order' => 2, 
        ]);
        
        DB::table('contents')->insert([
            'section_id' => 2,
            'item_id' => null,
            'type' => 'partner-logo', 
            'value' => 'assets/logoipsum-3.svg', 
            'order' => 3, 
        ]);
        
        DB::table('contents')->insert([
            'section_id' => 2,
            'item_id' => null,
            'type' => 'partner-logo', 
            'value' => 'assets/logoipsum-4.svg', 
            'order' => 4, 
        ]);
        
        DB::table('contents')->insert([
            'section_id' => 2,
            'item_id' => null,
            'type' => 'partner-logo', 
            'value' => 'assets/logoipsum-5.svg', 
            'order' => 5, 
        ]);
        
        
        // ----------------------------------------------------------------------------------

        DB::table('sections')->insert([
            'page_id' => 1,
            'type' => 'our-purpose', 
            'order' =>3, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 3,
            'item_id' => null,
            'type' => 'subtitle', 
            'value' => 'Nosso propósito', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 3,
            'item_id' => null,
            'type' => 'title', 
            'value' => 'Facilitar processos por meio da tecnologia.', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 3,
            'item_id' => null,
            'type' => 'diagram-image', 
            'value' => 'assets/diagram-facilita.svg', 
            'order' => 1, 
        ]);

        // ----------------------------------------------------------------------------------

        DB::table('sections')->insert([
            'page_id' => 1,
            'type' => 'cta-banner', 
            'order' => 4, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 4,
            'item_id' => null,
            'type' => 'background-image', 
            'value' => 'assets/background-drawing.png', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 4,
            'item_id' => null,
            'type' => 'title', 
            'value' => 'Faça valer cada minuto.', 
            'order' => 2, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 4,
            'item_id' => null,
            'type' => 'text', 
            'value' => 'Simplifique a gestão de saúde e segurança no trabalho. Oferecemos ferramentas para um ambiente seguro, produtivo e dentro das regulamentações.', 
            'order' => 3, 
        ]);


        // ----------------------------------------------------------------------------------


        DB::table('sections')->insert([
            'page_id' => 1,
            'type' => 'testimonials', 
            'order' => 5, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 5,
            'item_id' => null,
            'type' => 'title', 
            'value' => 'Cases de sucesso', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 5,
            'item_id' => null,
            'type' => 'image', 
            'value' => 'assets/testimonials.png', 
            'order' => 1, 
        ]);

        DB::table('items')->insert([
            'section_id' => 5,
            'order' => 1, 
        ]);

        DB::table('items')->insert([
            'section_id' => 5,
            'order' => 2, 
        ]);

        //

        DB::table('contents')->insert([
            'section_id' => 5,
            'item_id' => 1,
            'type' => 'text', 
            'value' => 'O sistema de gestão de segurança para a indústria automatizou grande parte dos nossos processos, facilitando o acompanhamento de conformidade e o controle de EPIs. Com fluxos de trabalho automáticos, auditorias e inspeções são realizadas de forma rápida e eficiente, garantindo que todas as normas de segurança sejam cumpridas sem complicações. A automação trouxe mais confiança e agilidade para nossas operações.', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 5,
            'item_id' => 1,
            'type' => 'author', 
            'value' => 'João da Silva', 
            'order' => 2, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 5,
            'item_id' => 1,
            'type' => 'author-company', 
            'value' => 'Dallemole', 
            'order' => 3, 
        ]);

        //

        DB::table('contents')->insert([
            'section_id' => 5,
            'item_id' => 2,
            'type' => 'text', 
            'value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint fugiat odio sunt iste molestias commodi natus nisi ullam voluptate impedit quo laudantium exercitationem, dolorum animi facilis iusto, consectetur perspiciatis deleniti?', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 5,
            'item_id' => 2,
            'type' => 'author', 
            'value' => 'Julia Santos', 
            'order' => 2, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 5,
            'item_id' => 2,
            'type' => 'author-company', 
            'value' => 'Dalleaço', 
            'order' => 3, 
        ]);

        //


        
        // ----------------------------------------------------------------------------------

    }
}
