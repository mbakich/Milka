<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = date('Y-m-d H:i:s');

        $sql = "
            INSERT INTO `categories` (`id`, `naziv`, `points`, `created_at`, `updated_at`) VALUES
                (1, 'Bars', 1, '{$now}', '{$now}'),
                (2, 'Pastry', 1, '{$now}', '{$now}'),
                (3, 'Table', 3, '{$now}', '{$now}'),
                (4, 'Bisquits', 3, '{$now}', '{$now}'),
                (5, 'Praline', 4, '{$now}', '{$now}'),
                (6, 'MMAX', 5, '{$now}', '{$now}');
            COMMIT;
        ";

        DB::unprepared($sql);
    }
}
