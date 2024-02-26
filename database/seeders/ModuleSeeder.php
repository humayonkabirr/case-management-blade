<?php

namespace Database\Seeders;

use App\Models\Auth\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Module::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'name'=>'Super User Management', 'created_at' => now()]);
        Module::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'name'=>'User Management', 'created_at' => now()]);
        Module::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'name'=>'Roles Management', 'created_at' => now()]);
        Module::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'name'=>'Store Category Management']);
        Module::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'name'=>'eBitans Analytics']);
        Module::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'name'=>'Customers Management', 'created_at' => now()]);
        Module::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'name'=>'Product Management', 'created_at' => now()]);
        Module::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'name'=>'Product Categories Management', 'created_at' => now()]);
        Module::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'name'=>'Product Sub Categories Management', 'created_at' => now()]);
        Module::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'name'=>'Product Variant Management', 'created_at' => now()]);
        Module::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'name'=>'Themes Management', 'created_at' => now()]);
    }
}
