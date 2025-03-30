<?php

namespace Database\Seeders;

use App\Models\Web\Country;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::factory()->create(
            [
                'name' => 'Srbija',
                'country_code' => 'SRB',
            ],
            [
                'name' => 'Hrvatska',
                'country_code' => 'CRO',
            ],
            [
                'name' => 'Bosna i Hercegovina',
                'country_code' => 'BIH',
            ],
            [
                'name' => 'Slovenijja',
                'country_code' => 'SLO',
            ]
        );
    }
}
