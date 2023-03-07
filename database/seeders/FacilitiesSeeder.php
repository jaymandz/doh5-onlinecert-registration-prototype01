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
            'id' => '1',
            'health_faci_code' => 'DOH000000000000247',
            'health_faci_code_short' => '247',
            'facility_name' => 'JUAN M. ALBERTO MEMORIAL DISTRICT HOSPITAL',
            'facility_major_type' => 'Health Facility',
            'health_facility_type' => 'Hospital',
            'owner_major_class' => 'Government',
            'owner_subclass_govt' => 'Local Government Unit',
            'owner_subclass_private' => '',
            'street_name_and_num' => '',
            'building_name_and_num' => '',
            'province_name' => 'CATANDUANES',
            'city_name' => 'SAN ANDRES',
            'barangay_name' => 'BELMONTE (POB.)',
            'zip_code' => '4810',
            'landline_number' => 0,
            'landline_number_2' => 0,
            'email_address' => '',
            'alt_email_add' => ''
        ]);
        
        Facilities::insert($data);
    }
}
