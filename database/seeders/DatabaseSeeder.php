<?php

namespace Database\Seeders;

use App\Helpers\AppConstants;
use App\Helpers\UserRole;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->usersSeed();
    }

    public function usersSeed()
    {
        // super admin
        User::create([
            'full_name' => 'super admin',
            'email' => 'super_admin@' . AppConstants::DomainName,
            'password' => Hash::make('P@ssw0rd'),
            'role' => UserRole::SuperAdmin,
        ]);
        // admin
        User::create([
            'full_name' => 'admin',
            'email' => 'admin@' . AppConstants::DomainName,
            'password' => Hash::make('P@ssw0rd'),
            'role' => UserRole::Admin,
        ]);
        // user
        User::create([
            'full_name' => 'user',
            'email' => 'user@' . AppConstants::DomainName,
            'password' => Hash::make('P@ssw0rd'),
            'role' => UserRole::User,
        ]);
    }
}
