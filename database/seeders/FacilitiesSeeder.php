<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Facilities;

class FacilitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ([
            'health_faci_code' => 'DOH000000000000247',
            'health_faci_code_short' => '247',
            'facility_name' => 'JUAN M. ALBERTO MEMORIAL DISTRICT HOSPITAL',
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
        ]);
        
        FacilityType::insert($data);
    }
}
