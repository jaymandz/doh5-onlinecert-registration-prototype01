<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
<<<<<<< HEAD
use Database\Seeders\FacilitiesSeeder;
use Database\Seeders\ProgramsSeeder;
use Database\Seeders\AssessmentToolsSeeder;
use Database\Seeders\SubgoalsSeeder;
=======
>>>>>>> 2a9358f0223b1d0dc06d1e62cfb64fd7f75eb88a

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        $this->call([
            FacilitiesSeeder::class,
            ProgramsSeeder::class,
            AssessmentToolsSeeder::class,
            SubgoalsSeeder::class
        ]);
=======
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
>>>>>>> 2a9358f0223b1d0dc06d1e62cfb64fd7f75eb88a
    }
}
