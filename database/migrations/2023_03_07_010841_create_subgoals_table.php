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
        Schema::create('subgoals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('assessment_tool_id');
            $table->integer('subgoal_number');
            // $table->text('criterion');
            $table->text('evidence_of_progress');
            $table->string('center_rating');    
            $table->text('surveyor_comments');    
            $table->string('surveyor_team_rating');   
            
            $table->foreign('assessment_tool_id')->references('id')->on('assessment_tools');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subgoals');
    }
};
