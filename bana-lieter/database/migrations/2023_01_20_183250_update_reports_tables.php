<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateReportsTables extends Migration
{
    const REPORTS_TABLES = [
        'report_attentions',
        'report_cognitive_subtests',
        'report_examiner_rating_scale_sections',
        'report_memory_batteries',
        'report_narratives'
    ];
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        foreach (self::REPORTS_TABLES as $report) {
            Schema::table($report, function (Blueprint $table) {
                $table->boolean('saved')->default(false);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        foreach (self::REPORTS_TABLES as $report) {
            Schema::table($report, function (Blueprint $table) {
                $table->dropColumn('saved');
            });
        }
    }
}
