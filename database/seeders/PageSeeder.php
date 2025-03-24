<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('pages')->insert([
            'slug' => 'home',
            'title' => 'Home', 
        ]);

        DB::table('pages')->insert([
            'slug' => 'sobre-nos',
            'title' => 'Sobre nós', 
        ]);

        DB::table('pages')->insert([
            'slug' => 'servicos',
            'title' => 'Serviços', 
        ]);

        DB::table('pages')->insert([
            'slug' => 'contato',
            'title' => 'Contato', 
        ]);
    }
}
