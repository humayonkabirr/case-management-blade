<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('education_levels')->insert([
            [
                'level' => 'Primary',
                'bn_level' => 'প্রাথমিক',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level' => 'Secondary',
                'bn_level' => 'মাধ্যমিক',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level' => 'Higher Secondary',
                'bn_level' => 'উচ্চ মাধ্যমিক',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level' => 'Diploma',
                'bn_level' => 'ডিপ্লোমা',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level' => 'Bachelor\'s Degree',
                'bn_level' => 'স্নাতক ডিগ্রী',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level' => 'Master\'s Degree',
                'bn_level' => 'স্নাতকোত্তর ডিগ্রী',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level' => 'MPhil/PhD',
                'bn_level' => 'এমফিল / পিএইচডি',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level' => 'Postdoctoral',
                'bn_level' => 'পোস্টডক্টরাল',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
