<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CountrySeeder::class,
            CategoriesSeeder::class,
            GramazaSeeder::class,
            KeyWordsSeeder::class,
            ProductsSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
        ]);
    }
}
