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
        DB::table('sections')->insert([
            'page_id' => 2,
            'type' => 'timeline', 
            'order' => 6, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 6,
            'item_id' => null,
            'type' => 'title', 
            'value' => 'Nossa história', 
            'order' => 1, 
        ]);

        DB::table('items')->insert([
            'section_id' => 6,
            'order' => 1, 
        ]);

        DB::table('items')->insert([
            'section_id' => 6,
            'order' => 2, 
        ]);

        DB::table('items')->insert([
            'section_id' => 6,
            'order' => 3, 
        ]);

        DB::table('items')->insert([
            'section_id' => 6,
            'order' => 4, 
        ]);

        DB::table('items')->insert([
            'section_id' => 6,
            'order' => 5, 
        ]);

        DB::table('items')->insert([
            'section_id' => 6,
            'order' => 6, 
        ]);
        
        DB::table('contents')->insert([
            'section_id' => 6,
            'item_id' => 3,
            'type' => 'year', 
            'value' => '2020', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 6,
            'item_id' => 3,
            'type' => 'title', 
            'value' => 'Lorem ipsum domor amet dolor losi eia esa', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 6,
            'item_id' => 3,
            'type' => 'description', 
            'value' => 'Lorem ipsum domor amet lorem ipsum domor amet Lorem ipsum domor amet', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 6,
            'item_id' => 4,
            'type' => 'year', 
            'value' => '2021', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 6,
            'item_id' => 4,
            'type' => 'title', 
            'value' => 'Lorem ipsum domor amet dolor', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 6,
            'item_id' => 4,
            'type' => 'description', 
            'value' => 'Lorem ipsum domor amet lorem amet Lorem ipsum domor amet', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 6,
            'item_id' => 5,
            'type' => 'year', 
            'value' => '2022', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 6,
            'item_id' => 5,
            'type' => 'title', 
            'value' => 'Lorem ipsum domor amet dolor', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 6,
            'item_id' => 5,
            'type' => 'description', 
            'value' => 'Lorem ipsum domor amet lorem amet Lorem ipsum domor amet', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 6,
            'item_id' => 6,
            'type' => 'year', 
            'value' => '2023', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 6,
            'item_id' => 6,
            'type' => 'title', 
            'value' => 'Lorem ipsum domor amet dolor', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 6,
            'item_id' => 6,
            'type' => 'description', 
            'value' => 'Lorem ipsum domor amet lorem amet Lorem ipsum domor amet', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 6,
            'item_id' => 7,
            'type' => 'year', 
            'value' => '2024', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 6,
            'item_id' => 7,
            'type' => 'title', 
            'value' => 'Lorem ipsum domor amet dolor', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 6,
            'item_id' => 7,
            'type' => 'description', 
            'value' => 'Lorem ipsum domor amet lorem amet Lorem ipsum domor amet', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 6,
            'item_id' => 8,
            'type' => 'year', 
            'value' => '2025', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 6,
            'item_id' => 8,
            'type' => 'title', 
            'value' => 'Lorem ipsum domor amet dolor', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 6,
            'item_id' => 8,
            'type' => 'description', 
            'value' => 'Lorem ipsum domor amet lorem amet Lorem ipsum domor amet', 
            'order' => 1, 
        ]);

        // --------------------------------------------------------

        DB::table('sections')->insert([
            'page_id' => 2,
            'type' => 'our-partners', 
            'order' => 7, 
        ]);
        
        DB::table('contents')->insert([
            'section_id' => 7,
            'item_id' => null,
            'type' => 'title', 
            'value' => 'Grandes empresas escolhem a Facilita', 
            'order' => 1, 
        ]);
        
        DB::table('contents')->insert([
            'section_id' => 7,
            'item_id' => null,
            'type' => 'partner-logo', 
            'value' => 'assets/logoipsum-1.svg', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 7,
            'item_id' => null,
            'type' => 'partner-logo', 
            'value' => 'assets/logoipsum-2.svg', 
            'order' => 2, 
        ]);
        
        DB::table('contents')->insert([
            'section_id' => 7,
            'item_id' => null,
            'type' => 'partner-logo', 
            'value' => 'assets/logoipsum-3.svg', 
            'order' => 3, 
        ]);
        
        DB::table('contents')->insert([
            'section_id' => 7,
            'item_id' => null,
            'type' => 'partner-logo', 
            'value' => 'assets/logoipsum-4.svg', 
            'order' => 4, 
        ]);
        
        DB::table('contents')->insert([
            'section_id' => 7,
            'item_id' => null,
            'type' => 'partner-logo', 
            'value' => 'assets/logoipsum-5.svg', 
            'order' => 5, 
        ]);
        
        
        // ----------------------------------------------------------------------------------

        DB::table('sections')->insert([
            'page_id' => 2,
            'type' => 'our-team', 
            'order' => 8, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 8,
            'item_id' => null,
            'type' => 'title', 
            'value' => 'Nossa equipe', 
            'order' => 1, 
        ]);

        DB::table('items')->insert([
            'section_id' => 8,
            'order' => 1, 
        ]);

        DB::table('items')->insert([
            'section_id' => 8,
            'order' => 2, 
        ]);

        DB::table('items')->insert([
            'section_id' => 8,
            'order' => 3, 
        ]);
        
        DB::table('contents')->insert([
            'section_id' => 8,
            'item_id' => 9,
            'type' => 'member-photo', 
            'value' => 'assets/testimonials.png', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 8,
            'item_id' => 9,
            'type' => 'member-name', 
            'value' => 'Nome', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 8,
            'item_id' => 9,
            'type' => 'member-occupation', 
            'value' => 'CEO Facilita Tecnologia', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 8,
            'item_id' => 10,
            'type' => 'member-photo', 
            'value' => 'assets/testimonials.png', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 8,
            'item_id' => 10,
            'type' => 'member-name', 
            'value' => 'Nome', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 8,
            'item_id' => 10,
            'type' => 'member-occupation', 
            'value' => 'CEO Facilita Tecnologia', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 8,
            'item_id' => 11,
            'type' => 'member-photo', 
            'value' => 'assets/testimonials.png', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 8,
            'item_id' => 11,
            'type' => 'member-name', 
            'value' => 'Nome', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 8,
            'item_id' => 11,
            'type' => 'member-occupation', 
            'value' => 'CEO Facilita Tecnologia', 
            'order' => 1, 
        ]);


        // ----------------------------------------------------------------------------------

        DB::table('sections')->insert([
            'page_id' => 2,
            'type' => 'our-purpose', 
            'order' => 9, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 9,
            'item_id' => null,
            'type' => 'subtitle', 
            'value' => 'Nosso propósito', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 9,
            'item_id' => null,
            'type' => 'title', 
            'value' => 'Facilitar processos por meio da tecnologia.', 
            'order' => 1, 
        ]);

        DB::table('contents')->insert([
            'section_id' => 9,
            'item_id' => null,
            'type' => 'diagram-image', 
            'value' => 'assets/diagram-facilita.svg', 
            'order' => 1, 
        ]);

        // ----------------------------------------------------------------------------------
    }
}
