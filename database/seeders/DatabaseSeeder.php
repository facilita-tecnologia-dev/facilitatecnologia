<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        DB::table('company_infos')->insert([
            'type' => 'whatsapp',
            'value' => '5551989269827',
            'order' => 1,
        ]);

        DB::table('users')->insert([
            'username' => 'facilita.code',
            'password' => Hash::make('facilita3015'),
        ]);

        $this->call([
            PageSeeder::class,
            HomeSeeder::class,
            AboutSeeder::class,
            ServicesSeeder::class,
            ContactSeeder::class,
            PlansSeeder::class,
        ]);
    }
}
