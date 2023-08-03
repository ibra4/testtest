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
            $table->unsignedBigInteger('report_cognitive_subtest_id')->nullable();
            $table->unsignedBigInteger('report_memory_battery_id')->nullable();
            $table->unsignedBigInteger('report_attention_id')->nullable();
            $table->unsignedBigInteger('report_supplemental_attention_id')->nullable();
            $table->unsignedBigInteger('report_examiner_rating_scale_section_id')->nullable();
            $table->unsignedBigInteger('report_narrative_id')->nullable();

            $table->foreign('report_cognitive_subtest_id')
                ->references('id')
                ->on('report_cognitive_subtests')
                ->onDelete('set null');
            $table->foreign('report_memory_battery_id')
                ->references('id')
                ->on('report_memory_batteries')
                ->onDelete('set null');
            $table->foreign('report_attention_id')
                ->references('id')
                ->on('report_attentions')
                ->onDelete('set null');
            $table->foreign('report_supplemental_attention_id')
                ->references('id')
                ->on('report_supplemental_attentions')
                ->onDelete('set null');
            $table->foreign('report_examiner_rating_scale_section_id')
                ->references('id')
                ->on('report_examiner_rating_scale_sections')
                ->onDelete('set null');
            $table->foreign('report_narrative_id')
                ->references('id')
                ->on('report_narratives')
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
