<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Facilities;
use App\Models\Programs;

class AssessmentTools extends Model
{
    use HasFactory;

    protected $fillable = [
        'facility_id',
        'goal_number',
        'goal_criterion',
        'standard_number',
        'standard_criterion',
        'evidence_of_progress',
        'center_rating',
        'surveyor_comments',
        'surveyor_team_rating'    
    ];

    public function facilities()
    {
        return $this->hasMany(Facilities::class);
    }

    public function programs()
    {
        return $this->hasMany(Programs::class);
    }
    
}
