<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\FacilityTypeSeeder;
use Database\Seeders\AssessmentToolsSeeder;
use Database\Seeders\SubgoalsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            FacilitiesSeeder::class,
            ProgramsSeeder::class,
            AssessmentToolsSeeder::class,
            SubgoalsSeeder::class
        ]);
    }
}
