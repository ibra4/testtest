<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNumbersColumnsToUsersTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('number_of_abas_reports')->default(0);
            $table->integer('used_abas_reports')->default(0);

            $table->integer('number_of_casd_reports')->default(0);
            $table->integer('used_casd_reports')->default(0);

            $table->integer('number_of_mpr_reports')->default(0);
            $table->integer('used_mpr_reports')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('number_of_abas_reports');
            $table->dropColumn('used_abas_reports');
            $table->dropColumn('number_of_casd_reports');
            $table->dropColumn('used_casd_reports');
            $table->dropColumn('number_of_mpr_reports');
            $table->dropColumn('used_mpr_reports');
        });
    }
}
