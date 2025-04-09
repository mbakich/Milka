<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = date('Y-m-d H:i:s');

        $sql = "
            INSERT INTO `role` (`id`, `name`, `display_name`, `description`) VALUES
            (1, 'admin', 'Administrator', 'Administrator'),
            (2, 'marketing', 'Marketing', 'Marketiing'),
            (3, 'client', 'Client', 'Client');
            COMMIT;
        ";

        DB::unprepared($sql);
    }
}
