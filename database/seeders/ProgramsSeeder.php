<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Programs;

class ProgramsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ([
            ['program_alias' => 'ABTC'],
            ['program_alias' => 'TB-DOTS']
        ]);
        
        Programs::insert($data);
    }
}
