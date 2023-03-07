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
            $table->id();
            $table->string('short_code', 15);
            $table->string('name', 512);
            $table->string('old_name1', 512);
            $table->string('old_name2', 512);
            $table->string('old_name3', 512);
            $table->foreignId('facility_type_id')->constrained();
            $table->string('ownership_major_classif', 512);
            $table->string('street_name', 512);
            $table->string('building_name', 512);
            $table->foreignId('barangay_id')->constrained();
            $table->integer('zip_code')->nullable();
            $table->string('landline_no1', 15);
            $table->string('landline_no2', 15);
            $table->string('fax_no', 15);
            $table->string('email_address', 512);
            $table->string('alternate_email_address', 512);
            $table->string('official_website', 512);
            $table->string('service_capability', 512);
            $table->integer('bed_capacity')->nullable();
            $table->boolean('is_with_license');
            $table->date('license_validity_date')->nullable();
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
