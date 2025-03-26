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
        $ourPlans = DB::table('sections')->insertGetId([
            'page_id' => 3,
            'type' => 'our-plans', 
            'order' => 1, 
        ]);
        
        DB::table('contents')->insert([
            'section_id' => $ourPlans,
            'item_id' => null,
            'type' => 'title', 
            'value' => 'Nossos planos', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => $ourPlans,
            'item_id' => null,
            'type' => 'description', 
            'value' => 'Conheça os nossos planos e escolha o mais apropriado para o seu negócio.', 
            'order' => 1, 
        ]);


        $CTABanner = DB::table('sections')->insertGetId([
            'page_id' => 3,
            'type' => 'cta-banner', 
            'order' => 2, 
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

    }
}
