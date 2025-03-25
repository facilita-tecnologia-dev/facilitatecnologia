<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('system_status')->insert([
            'system_status_code' => 1
        ]);

        DB::table('company_infos')->insert([
            'type' => 'logo-big',
            'value' => 'assets/logo-facilita.svg',
            'order' => 1,
        ]);

        DB::table('company_infos')->insert([
            'type' => 'logo-small',
            'value' => 'assets/icon-facilita.svg',
            'order' => 1,
        ]);

        DB::table('company_infos')->insert([
            'type' => 'linkedin',
            'value' => 'https://www.linkedin.com/company/facilitatecnologia/',
            'order' => 1,
        ]);

        DB::table('company_infos')->insert([
            'type' => 'facebook',
            'value' => 'https://www.facebook.com/share/1PNarmUqaw/',
            'order' => 1,
        ]);

        $this->call([
            PageSeeder::class,
            HomeSeeder::class,
            AboutSeeder::class,
            ServicesSeeder::class,
            ContactSeeder::class,
        ]);
    }
}
