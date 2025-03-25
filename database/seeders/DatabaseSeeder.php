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
        // User::factory(10)->create();
        DB::table('system_status')->insert([
            'system_status_code' => 1
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
