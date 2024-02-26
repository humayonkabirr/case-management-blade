<?php

namespace Database\Seeders;

use App\Models\Auth\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Role::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'name' => 'Super Admin', 'slug' => 'super-admin', 'status' => 1, 'created_at' => now()]);
        Role::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'name' => 'No Role', 'slug' => 'no-role', 'status' => 1, 'created_at' => now()]);
        Role::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'name' => 'Admin', 'slug' => 'admin', 'status' => 1, 'created_at' => now()]);
        Role::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'name' => 'Employee', 'slug' => 'employee', 'status' => 1, 'created_at' => now()]);
    }
}
