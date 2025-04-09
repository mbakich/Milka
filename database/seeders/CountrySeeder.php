<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = date('Y-m-d H:i:s');

        $sql = "
           INSERT INTO `countries` (`id`, `name`, `country_code`, `created_at`, `updated_at`) VALUES
                (1, 'Srbija', 'SRB', '{$now}', '{$now}'),
                (2, 'Hrvatska', 'CRO', '{$now}', '{$now}'),
                (3, 'Slovenija', 'SLO', '{$now}', '{$now}'),
                (4, 'Bosna i Hercegovina', 'BIH', '{$now}', '{$now}');
            COMMIT;
        ";

        DB::unprepared($sql);
    }
}
