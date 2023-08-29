<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbasExamSubDomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abas_exam_sub_domains', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('abas_exam_id');
            $table->unsignedBigInteger('abas_sub_domain_id');
            $table->boolean('is_saved')->default(false);
            $table->foreign('abas_exam_id')->references('id')->on('abas_exams')->onDelete('cascade');
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
        Schema::dropIfExists('exam_sub_domains');
    }
}
