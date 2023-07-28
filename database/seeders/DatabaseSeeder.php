<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CountrySeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([

            AdminUserSeeder::class,
            ProductSeeder::class,
            CountrySeeder::class,

        ]);
        // \App\Models\User::factory(10)->create();
    }
}
