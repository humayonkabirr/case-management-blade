<?php

namespace Database\Seeders;

use App\Models\CaseType; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CaseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CaseType::insert([ 
            [
                'name' => 'Family Matters',
                'bn_name' => 'পারিবারিক ব্যাপার',
            ],
            [
                'name' => 'Financial Crimes',
                'bn_name' => 'আর্থিক অপরাধ',
            ],
            [
                'name' => 'Crimes Against Persons',
                'bn_name' => 'ব্যক্তিদের বিরুদ্ধে অপরাধ',
            ],
            [
                'name' => 'Environmental Cases',
                'bn_name' => 'পরিবেশগত কেস',
            ],
            [
                'name' => 'Labor and Employment Cases',
                'bn_name' => 'শ্রম এবং কর্মসংস্থান মামলা',
            ],
            [
                'name' => 'Corporate Cases',
                'bn_name' => 'কর্পোরেট মামলা',
            ]
        ]);
        
    }
}
