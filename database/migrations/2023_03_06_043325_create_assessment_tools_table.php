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
        Schema::create('assessment_tools', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('program_id');
            $table->unsignedBigInteger('facility_id');
            // $table->string('goal_number');
            // $table->text('goal_criterion');
            // $table->string('standard_number');
            // $table->text('standard_criterion');
            $table->text('evidence_of_progress');
            $table->string('center_rating');    
            $table->text('surveyor_comments');    
            $table->string('surveyor_team_rating');   

            $table->foreign('facility_id')->references('id')->on('facilities');
            $table->foreign('program_id')->references('id')->on('programs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assessment_tools');
    }
};
