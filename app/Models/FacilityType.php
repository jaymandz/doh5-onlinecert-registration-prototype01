<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AssessmentTools;

class FacilityType extends Model
{
    use HasFactory;

    protected $fillable = [
        'facility_type_name'
    ];

    public function assessment_tools()
    {
        return $this->hasMany(AssessmentTools::class);
    }

}
