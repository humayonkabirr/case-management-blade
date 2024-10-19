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
                'institute' => 'Dhaka University',
                'degree' => 'Bachelor of Science',
                'major_subject' => 'Computer Science',
                'board_university' => 'University of Dhaka',
                'education_level' => 'bachelors',
                'accreditation' => 'National',
                'admission_year' => 2015,
                'graduation_year' => 2019,
                'gpa' => 3.80,
                'honors_awards' => 'Dean\'s List',
                'location' => 'Dhaka, Bangladesh',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'institute' => 'BUET',
                'degree' => 'Master of Science',
                'major_subject' => 'Mechanical Engineering',
                'board_university' => 'Bangladesh University of Engineering and Technology',
                'education_level' => 'masters',
                'accreditation' => 'National',
                'admission_year' => 2017,
                'graduation_year' => 2021,
                'gpa' => 3.90,
                'honors_awards' => 'Best Thesis Award',
                'location' => 'Dhaka, Bangladesh',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'institute' => 'Harvard University',
                'degree' => 'PhD in Economics',
                'major_subject' => 'Development Economics',
                'board_university' => 'Harvard University',
                'education_level' => 'mphil_phd',
                'accreditation' => 'International',
                'admission_year' => 2013,
                'graduation_year' => 2018,
                'gpa' => null, // PhDs may not have a GPA
                'honors_awards' => 'Research Fellowship',
                'location' => 'Cambridge, USA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'institute' => 'Notre Dame College',
                'degree' => 'Higher Secondary Certificate',
                'major_subject' => 'Science',
                'board_university' => 'Dhaka Board',
                'education_level' => 'higher_secondary',
                'accreditation' => 'National',
                'admission_year' => 2010,
                'graduation_year' => 2012,
                'gpa' => 5.00,
                'honors_awards' => 'Top 5% of Class',
                'location' => 'Dhaka, Bangladesh',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
