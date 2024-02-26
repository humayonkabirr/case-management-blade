<?php

namespace Database\Seeders;

use App\Models\Auth\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        UserRole::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'user_id' => '1', 'role_id' => '1','created_at' => now()]);
        UserRole::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'user_id' => '2', 'role_id' => '3','created_at' => now()]);
    }
}
