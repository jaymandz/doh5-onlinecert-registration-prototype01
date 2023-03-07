<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programs extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_alias',
        'program_full_name'
    ];

    public function assessment_tools()
    {
        return $this->belongsTo(AssessmentTools::class);
    }
}
