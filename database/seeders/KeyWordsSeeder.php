<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeyWordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = date('Y-m-d H:i:s');

        $sql = "
            INSERT INTO `key_words` (`id`, `sinonim`) VALUES
                (1, 'MILKA'),
                (2, 'PRALINE'),
                (3, 'OREO'),
                (4, 'ČOKOLADA'),
                (5, 'KEKS'),
                (6, 'BISKVIT'),
                (7, 'CHOCO'),
                (8, 'MLEČNA'),
                (9, 'BISQUIT'),
                (10, 'BOMBONJERA'),
                (11, 'ČOKOL'),
                (12, 'ČOK'),
                (13, 'DESERT');
                COMMIT;
        ";

        DB::unprepared($sql);
    }
}
