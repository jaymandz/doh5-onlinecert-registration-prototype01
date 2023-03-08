<?php

namespace Database\Seeders;

use App\Models\Subgoals;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubgoalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ([
            [
                'id' => '1',
                'assessment_tool_id' => '1',
                //'standard_number' => '1.1.',
                //'criterion' => 'There is appropriate signage bearing the name of the TB DOTS center to assist patients accessing the center.',
                'evidence_of_progress' => '',
                'center_rating' => '',   
                'surveyor_comments' => '',   
                'surveyor_team_rating' => ''
            ],
            [
                'id' => '2',
                'assessment_tool_id' => '1',
                //'standard_number' => '1.2.',
                // 'criterion' => 'There is appropriate signage bearing the name of the TB DOTS center to assist patients accessing the center.',
                'evidence_of_progress' => '',
                'center_rating' => '',   
                'surveyor_comments' => '',   
                'surveyor_team_rating' => ''
            ], 
            [
                'id' => '3',
                'assessment_tool_id' => '1',
                //'standard_number' => '1.2.',
                // 'criterion' => 'There is appropriate signage bearing the name of the TB DOTS center to assist patients accessing the center.',
                'evidence_of_progress' => '',
                'center_rating' => '',   
                'surveyor_comments' => '',   
                'surveyor_team_rating' => ''
            ],
            [
                'id' => '3',
                'assessment_tool_id' => '1',
                //'standard_number' => '1.2.',
                // 'criterion' => 'There is appropriate signage bearing the name of the TB DOTS center to assist patients accessing the center.',
                'evidence_of_progress' => '',
                'center_rating' => '',   
                'surveyor_comments' => '',   
                'surveyor_team_rating' => ''
            ]   
        ]);
        
        Subgoals::insert($data);
    }
}
