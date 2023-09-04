<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasdExamSubDomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casd_exam_sub_domains', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('casd_exam_id');
            $table->unsignedBigInteger('casd_sub_domain_id');
            $table->boolean('is_saved')->default(false);
            $table->foreign('casd_exam_id')->references('id')->on('casd_exams')->onDelete('cascade');
            $table->foreign('casd_sub_domain_id')->references('id')->on('casd_sub_domains')->onDelete('cascade');
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
        Schema::dropIfExists('casd_exam_sub_domains');
    }
}
