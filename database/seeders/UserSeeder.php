<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            'first_name' => 'Humayon',
            'last_name' => 'Kabir',
            'email' => 'humayonkobir8@gmail.com',
            'mobile' => '01766169534',
            'type' => 'Super Admin',
            'password' => Hash::make('humayonkobir8@gmail.com'),
            'status' => '1',
            'created_at' => now()
        ]);
        User::insert([
            'first_name' => 'Kabir',
            'last_name' => '',
            'email' => 'kabir@gmail.com',
            'mobile' => '01766169533',
            'type' => 'Super Admin',
            'password' => Hash::make('kabir@gmail.com'),
            'status' => '1',
            'created_at' => now()
        ]);
        
    }
}
