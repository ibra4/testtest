<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbasExamQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abas_exam_questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('abas_exam_id');
            $table->unsignedBigInteger('abas_question_id');
            $table->integer('result');
            $table->boolean('guess')->default(false);
            $table->foreign('abas_exam_id')->references('id')->on('abas_exams')->onDelete('cascade');
            $table->foreign('abas_question_id')->references('id')->on('abas_questions')->onDelete('cascade');
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
        Schema::dropIfExists('abas_exam_questions');
    }
}
