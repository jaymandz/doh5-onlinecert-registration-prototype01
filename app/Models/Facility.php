<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Enums\OwnershipMajorClassification;
use App\Enums\ServiceCapability;

class Facility extends Model
{
    use HasFactory;

    protected $casts = [
        'ownership_major_classif' => OwnershipMajorClassification::class,
        'service_capability' => ServiceCapability::class,
    ];
}
