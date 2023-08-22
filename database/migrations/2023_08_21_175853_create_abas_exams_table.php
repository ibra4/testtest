<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbasExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abas_exams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('examinee_id');
            $table->unsignedBigInteger('created_by');
            $table->string('for');
            $table->date('application_date');
            $table->text('examiner_notes')->nullable();
            $table->foreign('examinee_id')->references('id')->on('examinees')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('abas_exams');
    }
}