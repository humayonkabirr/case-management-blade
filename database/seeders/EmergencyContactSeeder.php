<?php

namespace Database\Seeders;

use App\Models\EmergencyContact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmergencyContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed data using the model
        EmergencyContact::create([
            'user_id' => 1,
            'first_name' => 'John',
            'last_name' => 'Doe',
            'relationship' => 'Friend',
            'mobile' => '+1234567890',
            'gender' => 'male',
            'email' => 'johndoe@example.com',
            'address' => '123 Elm Street',
            'status' => 1,
        ]);

        EmergencyContact::create([
            'user_id' => 2,
            'first_name' => 'Jane',
            'last_name' => 'Smith',
            'relationship' => 'Sibling',
            'mobile' => '+0987654321',
            'gender' => 'female',
            'email' => 'janesmith@example.com',
            'address' => '456 Maple Avenue',
            'status' => 1,
        ]);
    }
}
