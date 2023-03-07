<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FacilityType;

class AssessmentTools extends Model
{
    use HasFactory;

    protected $fillable = [
        'facility_id',
        'facility_name',
        'goal_number',
        'goal_criterion',
        'standard_number',
        'standard_criterion',
        'evidence_of_progress',
        'center_rating',
        'surveyor_comments',
        'surveyor_team_rating'    
    ];

    public function facility_types()
    {
        return $this->belongsTo(FacilityType::class);
    }
    
}
