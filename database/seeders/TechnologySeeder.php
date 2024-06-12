<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Technology::create(['name' => 'Laravel']);
        Technology::create(['name' => 'PHP']);
        Technology::create(['name' => 'JavaScript']);
        Technology::create(['name' => 'Vue.js']);
        Technology::create(['name' => 'Angular']);
        Technology::create(['name' => 'React']);
        Technology::create(['name' => 'Flutter']);
        Technology::create(['name' => 'Django']);
        Technology::create(['name' => 'Ruby']);
        Technology::create(['name' => 'Python']);
        Technology::create(['name' => 'Java']);
        
    }
}