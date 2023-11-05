<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddQuestionNumberToAbasSubDomainQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('abas_sub_domain_questions', function (Blueprint $table) {
            $table->integer('question_number')->default(0);
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
            $table->dropColumn('question_number');
        });
    }
}
