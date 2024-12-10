<?php

namespace Database\Seeders;

use App\Models\Court;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class CourtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Initialize Faker
        $faker = Faker::create();

        // Loop to insert 10 sample court records
        for ($i = 0; $i < 10; $i++) { 
            Court::create([
                'name' => $faker->company . ' Court', // Random court name (company name)
                'bn_name' => $faker->company . ' আদালত', // Bengali name for court
                'division_id' => $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8]), // Random division ID from the array of possible division IDs
                'district_id' => $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20]), // Random district ID from the array of possible district IDs
                'location' => $faker->address, // Random address
                'bn_location' => $faker->address, // Bengali address
                'serial' => $faker->unique()->numberBetween(1, 100),
                'status' => $faker->randomElement([1, 2, 3, 4]),
                'created_at' => now(), // Set current timestamp for created_at
                'updated_at' => now(), // Set current timestamp for updated_at
                'deleted_at' => null, // Soft delete field set to null
            ]);
        }
    }
}
