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

        DB::table('contents')->insert([
            'section_id' => 1,
            'item_id' => null,
            'type' => 'text', 
            'value' => 'Desenvolvemos soluções personalizadas que transformam desafios em praticidade.', 
            'order' => 3, 
        ]);

        DB::table('sections')->insert([
            'page_id' => 1,
            'type' => 'our-partners', 
            'order' => 2, 
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
        
        
    }
}
