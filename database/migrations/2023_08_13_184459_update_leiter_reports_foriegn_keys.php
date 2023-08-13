<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateLeiterReportsForiegnKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('leiter_reports', function (Blueprint $table) {
            $table->dropForeign('reports_report_cognitive_subtest_id_foreign');
            $table->dropForeign('reports_report_memory_battery_id_foreign');
            $table->dropForeign('reports_report_attention_id_foreign');
            $table->dropForeign('reports_report_supplemental_attention_id_foreign');
            $table->dropForeign('reports_report_examiner_rating_scale_section_id_foreign');
            $table->dropForeign('reports_report_narrative_id_foreign');

            $table->foreign('report_cognitive_subtest_id')
                ->references('id')
                ->on('report_cognitive_subtests')
                ->onDelete('cascade');
            $table->foreign('report_memory_battery_id')
                ->references('id')
                ->on('report_memory_batteries')
                ->onDelete('cascade');
            $table->foreign('report_attention_id')
                ->references('id')
                ->on('report_attentions')
                ->onDelete('cascade');
            $table->foreign('report_supplemental_attention_id')
                ->references('id')
                ->on('report_supplemental_attentions')
                ->onDelete('cascade');
            $table->foreign('report_examiner_rating_scale_section_id')
                ->references('id')
                ->on('report_examiner_rating_scale_sections')
                ->onDelete('cascade');
            $table->foreign('report_narrative_id')
                ->references('id')
                ->on('report_narratives')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
