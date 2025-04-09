<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $now = date('Y-m-d H:i:s');

        $sql = "
            INSERT INTO `prizes` (`id`, `name`, `description`, `pointsCost`, `totalStock`, `remainingStock`, `maxPerUser`, `country_code`, `created_at`, `updated_at`) VALUES
            (1, 'Milka šolja', 'Milka šolja', 5, 1200, 1200, 2, 'SRB', '{$now}', '{$now}'),
            (2, 'Milka šolja', 'Milka šolja', 5, 1200, 1200, 2, 'CRO', '{$now}', '{$now}'),
            (3, 'Milka šolja', 'Milka šolja', 5, 1000, 1000, 2, 'SLO', '{$now}', '{$now}'),
            (4, 'Milka šolja', 'Milka šolja', 5, 800, 800, 2, 'BIH', '{$now}', '{$now}');
            COMMIT;
        ";

        DB::unprepared($sql);

        $sql = "
            INSERT INTO `prizes` (`id`, `name`, `description`, `pointsCost`, `totalStock`, `remainingStock`, `maxPerUser`, `country_code`, `created_at`, `updated_at`) VALUES
            (5, 'Milka peškir', 'Milka peškir', 10, 1000, 1000, 2, 'SRB', '{$now}', '{$now}'),
            (6, 'Milka peškir', 'Milka peškir', 10, 1000, 1000, 2, 'CRO', '{$now}', '{$now}'),
            (7, 'Milka peškir', 'Milka peškir', 10, 800, 800, 2, 'SLO', '{$now}', '{$now}'),
            (8, 'Milka peškir', 'Milka peškir', 10, 700, 700, 2, 'BIH', '{$now}', '{$now}');
            COMMIT;
        ";

        DB::unprepared($sql);

        $sql = "
            INSERT INTO `prizes` (`id`, `name`, `description`, `pointsCost`, `totalStock`, `remainingStock`, `maxPerUser`, `country_code`, `created_at`, `updated_at`) VALUES
            (9, 'Milka stolica', 'Milka stolica', 25, 100, 100, 2, 'SRB', '{$now}', '{$now}'),
            (10, 'Milka stolica', 'Milka stolica', 25, 100, 100, 2, 'CRO', '{$now}', '{$now}'),
            (11, 'Milka stolica', 'Milka stolica', 25, 80, 80, 2, 'SLO', '{$now}', '{$now}'),
            (12, 'Milka stolica', 'Milka stolica', 25, 50, 50, 2, 'BIH', '{$now}', '{$now}');
            COMMIT;
        ";

        DB::unprepared($sql);

        $sql = "
            INSERT INTO `prizes` (`id`, `name`, `description`, `pointsCost`, `totalStock`, `remainingStock`, `maxPerUser`, `country_code`, `created_at`, `updated_at`) VALUES
            (13, 'Bingo vaučer 25 evr', 'Bingo vaučer 25 evr', 15, 100, 100, 2, 'BIH', '{$now}', '{$now}');
            COMMIT;
        ";

        DB::unprepared($sql);

        $sql = "
            INSERT INTO `prizes` (`id`, `name`, `description`, `pointsCost`, `totalStock`, `remainingStock`, `maxPerUser`, `country_code`, `created_at`, `updated_at`) VALUES
            (14, 'Polarbox', 'Polarbox', 35, 50, 50, 2, 'SRB', '{$now}', '{$now}'),
            (15, 'Polarbox', 'Polarbox', 35, 54, 54, 2, 'CRO', '{$now}', '{$now}'),
            (16, 'Polarbox', 'Polarbox', 35, 54, 54, 2, 'SLO', '{$now}', '{$now}'),
            (17, 'Polarbox', 'Polarbox', 35, 54, 54, 2, 'BIH', '{$now}', '{$now}');
            COMMIT;
        ";

        DB::unprepared($sql);

        $sql = "
            INSERT INTO `prizes` (`id`, `name`, `description`, `pointsCost`, `totalStock`, `remainingStock`, `maxPerUser`, `country_code`, `created_at`, `updated_at`) VALUES
            (18, 'Instant fotoaparat', 'Instant fotoaparat', 70, 30, 30, 1, 'SRB', '{$now}', '{$now}'),
            (19, 'Instant fotoaparat', 'Instant fotoaparat', 70, 30, 30, 1, 'CRO', '{$now}', '{$now}'),
            (20, 'Instant fotoaparat', 'Instant fotoaparat', 70, 20, 20, 1, 'SLO', '{$now}', '{$now}'),
            (21, 'Instant fotoaparat', 'Instant fotoaparat', 70, 15, 15, 1, 'BIH', '{$now}', '{$now}');
            COMMIT;
        ";

        DB::unprepared($sql);

        $sql = "
            INSERT INTO `prizes` (`id`, `name`, `description`, `pointsCost`, `totalStock`, `remainingStock`, `maxPerUser`, `country_code`, `created_at`, `updated_at`) VALUES
            (22, 'Air Fryer', 'Air Fryer', 85, 10, 10, 1, 'SRB', '{$now}', '{$now}'),
            (23, 'Air Fryer', 'Air Fryer', 85, 10, 10, 1, 'CRO', '{$now}', '{$now}'),
            (24, 'Air Fryer', 'Air Fryer', 85, 7, 7, 1, 'SLO', '{$now}', '{$now}'),
            (25, 'Air Fryer', 'Air Fryer', 85, 7, 7, 1, 'BIH', '{$now}', '{$now}');
            COMMIT;
        ";

        DB::unprepared($sql);

        $sql = "
            INSERT INTO `prizes` (`id`, `name`, `description`, `pointsCost`, `totalStock`, `remainingStock`, `maxPerUser`, `country_code`, `created_at`, `updated_at`) VALUES
            (26, 'Aparat za kafu', 'Aparat za kafu', 90, 10, 10, 1, 'SRB', '{$now}', '{$now}'),
            (27, 'Aparat za kafu', 'Aparat za kafu', 90, 10, 10, 1, 'CRO', '{$now}', '{$now}'),
            (28, 'Aparat za kafu', 'Aparat za kafu', 90, 7, 7, 1, 'SLO', '{$now}', '{$now}'),
            (29, 'Aparat za kafu', 'Aparat za kafu', 90, 7, 7, 1, 'BIH', '{$now}', '{$now}');
            COMMIT;
        ";

        DB::unprepared($sql);
    }
}
