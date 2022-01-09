<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(LaratrustSeeder::class);
         \App\Models\DataWarga::factory(10)->create();
         \App\Models\DataRumah::factory(10)->create();
    }
}
