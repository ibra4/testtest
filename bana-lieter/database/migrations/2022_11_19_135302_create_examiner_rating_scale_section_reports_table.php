<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExaminerRatingScaleSectionReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examiner_rating_scale_section_reports', function (Blueprint $table) {
            $table->id();
            $table->integer('attention');
            $table->integer('organization_impulse_control');
            $table->integer('activity_level');
            $table->integer('sociability');
            $table->integer('energy_and_feelings');
            $table->integer('regulation');
            $table->integer('anxiety');
            $table->integer('sensory_reaction');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examiner_rating_scale_section_reports');
    }
}
