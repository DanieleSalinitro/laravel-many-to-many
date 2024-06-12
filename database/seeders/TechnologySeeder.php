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
        $technologies = [
            ['name' => 'Laravel'],
            ['name' => 'PHP'],
            ['name' => 'JavaScript'],
            ['name' => 'Vue.js'],
            ['name' => 'Angular'],
            ['name' => 'React'],
            ['name' => 'Flutter'],
            ['name' => 'Django'],
            ['name' => 'Ruby'],
            ['name' => 'Python'],
            ['name' => 'Java'],
        ];

        foreach ($technologies as $technology) {
            Technology::create($technology);
        }
    }
}
