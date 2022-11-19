<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cognitive_subtests_report_id')->nullable();
            $table->unsignedBigInteger('memory_battery_report_id')->nullable();
            $table->unsignedBigInteger('attention_report_id')->nullable();
            $table->unsignedBigInteger('examiner_rating_scale_section_report_id')->nullable();
            $table->unsignedBigInteger('narrative_report_report_id')->nullable();

            $table->foreign('cognitive_subtests_report_id')
                ->references('id')
                ->on('cognitive_subtests_reports')
                ->onDelete('set null');
            $table->foreign('memory_battery_report_id')
                ->references('id')
                ->on('memory_battery_reports')
                ->onDelete('set null');
            $table->foreign('attention_report_id')
                ->references('id')
                ->on('attention_reports')
                ->onDelete('set null');
            $table->foreign('examiner_rating_scale_section_report_id')
                ->references('id')
                ->on('examiner_rating_scale_section_reports')
                ->onDelete('set null');
            $table->foreign('narrative_report_report_id')
                ->references('id')
                ->on('narrative_report_reports')
                ->onDelete('set null');
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
        Schema::dropIfExists('reports');
    }
}
