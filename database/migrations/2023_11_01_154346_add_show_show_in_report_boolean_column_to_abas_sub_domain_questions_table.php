<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddShowShowInReportBooleanColumnToAbasSubDomainQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('abas_sub_domain_questions', function (Blueprint $table) {
            $table->boolean('show_in_report')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('abas_sub_domain_questions', function (Blueprint $table) {
            $table->dropColumn('show_in_report');
        });
    }
}
