<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AssessmentTools;

class AssessmentToolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ([
            'program_id' => '1', //ABTC
            'facility_id' => '1',
            'goal_number' => '1',
            'goal_criterion' => 'The animal Bite Treatment Center / Animal Bite Center provides
            a safe and effective physical environmetn to its patients and staff',
            'standard_number' => '1',
            'standard_criterion' => 'The TB DOTS center is easily located and patients have convenient and safe access to the center.',
            'evidence_of_progress' => '',
            'center_rating' => '',   
            'surveyor_comments' => '',   
            'surveyor_team_rating' => ''    
        ]);
        
        AssessmentTools::insert($data);
    }
}
