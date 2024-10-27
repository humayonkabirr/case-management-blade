<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('education_infos')->insert([
                [
                    'user_id' => 1, // Replace with a valid user ID
                    'institute' => 'Example University',
                    'degree' => 1, // Assuming this corresponds to a valid degree ID
                    'education_level_id' => 1, // Replace with a valid education level ID
                    'major_subject' => 'Computer Science',
                    'board_university' => 'National University',
                    'accreditation' => 'National',
                    'admission_year' => 2020,
                    'graduation_year' => 2024,
                    'gpa_cgpa' => 3.75,
                    'honors_awards' => 'Scholarship Award',
                    'location' => 'Dhaka, Bangladesh',
                    'status' => 1,
                ],
                [
                    'user_id' => 2, // Replace with a valid user ID
                    'institute' => 'Another Institute',
                    'degree' => 2, // Assuming this corresponds to a valid degree ID
                    'education_level_id' => 2, // Replace with a valid education level ID
                    'major_subject' => 'Mechanical Engineering',
                    'board_university' => 'Engineering University',
                    'accreditation' => 'International',
                    'admission_year' => 2019,
                    'graduation_year' => 2023,
                    'gpa_cgpa' => 3.50,
                    'honors_awards' => 'Best Project Award',
                    'location' => 'Chittagong, Bangladesh',
                    'status' => 1,
                ]
        ]);
    }
}
