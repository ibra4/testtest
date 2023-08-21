<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbasQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abas_questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('abas_sub_domain_id');
            $table->text('name');
            $table->text('name_en')->nullable();
            $table->foreign('abas_sub_domain_id')->references('id')->on('abas_sub_domains')->onDelete('cascade');
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
        Schema::dropIfExists('abas_questions');
    }
}
