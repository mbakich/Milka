<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Web\Role;
use Vanguard\Support\Enum\UserStatus;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $admin = Role::where('name', 'Admin')->first();

        User::create([
            'name' => 'admin',
            'fullName' => 'Administrator',
            'email' => 'admin@milka.loc',
        //    'username' => 'admin',
            'password' => '!AdminMilka711!',
         //   'avatar' => null,
         //   'country_id' => null,
            'role_id' => $admin->id,
         //   'status' => UserStatus::ACTIVE,
            'email_verified_at' => now(),
        ]);
    }
}
