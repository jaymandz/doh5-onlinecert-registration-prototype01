<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subgoals extends Model
{
    use HasFactory;

    protected $fillable = [
        'subgoal_number',
        'criterion',
        'evidence_of_progress',
        'center_rating',
        'surveyor_comments',
        'surveyor_team_rating'    
    ];
}
