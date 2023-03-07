<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('facilities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('health_faci_code');
            $table->integer('health_faci_code_short');
            $table->string('facility_name');
            $table->string('facility_major_type');
            $table->string('health_facility_type');
            $table->string('owner_major_class');
            $table->string('owner_subclass_govt');
            $table->string('owner_subclass_private');
            $table->string('street_name_and_num');
            $table->string('building_name_and_num');
            $table->string('province_name');
            $table->string('city_name');
            $table->string('barangay_name');
            $table->integer('zip_code');
            $table->bigInteger('landline_number');
            $table->bigInteger('landline_number_2');
            $table->string('email_address');
            $table->string('alt_email_add');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facilities');
    }
};
