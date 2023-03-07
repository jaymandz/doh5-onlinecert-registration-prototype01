<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AssessmentTools;

class Facilities extends Model
{
    use HasFactory;

    protected $fillable = [
        'health_faci_code',
        'health_faci_code_short',
        'facility_name',
        'facility_major_type',
        'health_facility_type',
        'owner_major_class',
        'owner_subclass_govt',
        'owner_subclass_private',
        'street_name_and_num',
        'building_name_and_num',
        'province_name',
        'city_name',
        'barangay_name',
        'zip_code',
        'landline_number',
        'landline_number_2',
        'email_address',
        'alt_email_add'
    ];

    public function assessment_tools()
    {
        return $this->hasMany(AssessmentTools::class);
    }

}
