<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GramazaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = date('Y-m-d H:i:s');

        $sql = "
            INSERT INTO `gramaza` (`id`, `category`, `grams`) VALUES
                (1, 'MMAX', '250'),
                (2, 'MMAX', '270'),
                (3, 'MMAX', '276'),
                (4, 'MMAX', '280'),
                (5, 'MMAX', '300'),
                (6, 'Bisquit', '112'),
                (7, 'Bisquit', '120'),
                (8, 'Bisquit', '126'),
                (9, 'Bisquit', '128'),
                (10, 'Bisquit', '132'),
                (11, 'Bisquit', '140'),
                (12, 'Bisquit', '147'),
                (13, 'Bisquit', '150'),
                (14, 'Bisquit', '175'),
                (15, 'Bisquit', '184'),
                (16, 'Bisquit', '260'),
                (17, 'Bisquit', '312'),
                (20, 'Pastry', '50'),
                (21, 'Praline', '44'),
                (22, 'Praline', '95'),
                (23, 'Praline', '110'),
                (24, 'Praline', '158'),
                (25, 'Praline', '159'),
                (26, 'Table', '80'),
                (27, 'Table', '87,5'),
                (28, 'Table', '90'),
                (29, 'Table', '92'),
                (30, 'Table', '95'),
                (31, 'Table', '100'),
                (32, 'Table', '190'),
                (33, 'Bars', '31'),
                (34, 'Bars', '31,5'),
                (35, 'Bars', '37'),
                (36, 'Bars', '46'),
                (37, 'Bars', '48');
                COMMIT;
        ";

        DB::unprepared($sql);
    }
}
