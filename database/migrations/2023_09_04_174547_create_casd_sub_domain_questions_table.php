<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasdSubDomainQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casd_sub_domain_questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('casd_exam_sub_domain_id');
            $table->unsignedBigInteger('casd_question_id');
            $table->boolean('checked')->default(false);
            $table->foreign('casd_exam_sub_domain_id')->references('id')->on('casd_exam_sub_domains')->onDelete('cascade');
            $table->foreign('casd_question_id')->references('id')->on('casd_questions')->onDelete('cascade');
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
        Schema::dropIfExists('casd_sub_domain_questions');
    }
}
