<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MoveIsSavedColumnFromCasdExamSubDomainsTableTocasdExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('casd_exam_sub_domains', function (Blueprint $table) {
            $table->dropColumn('is_saved');
        });

        Schema::table('casd_exams', function (Blueprint $table) {
            $table->boolean('is_saved')->default(false);
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
