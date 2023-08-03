<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportExaminerRatingScaleSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_examiner_rating_scale_sections', function (Blueprint $table) {
            $table->id();
            $table->integer('attention');
            $table->integer('organization_impulse_control');
            $table->integer('activity_level');
            $table->integer('sociability');
            $table->integer('energy_and_feelings');
            $table->integer('regulation');
            $table->integer('anxiety');
            $table->integer('sensory_reaction');
            $table->string('file_en')->nullable();
            $table->string('file_ar')->nullable();
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
        Schema::dropIfExists('report_examiner_rating_scale_sections');
    }
}