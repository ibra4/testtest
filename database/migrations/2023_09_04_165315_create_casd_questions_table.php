<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasdQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casd_questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('casd_sub_domain_id')->nullable()->default(null);
            $table->text('name');
            $table->text('name_en')->nullable();
            $table->text('description')->nullable();
            $table->text('description_en')->nullable();
            $table->integer('question_number')->default(1);
            $table->foreign('casd_sub_domain_id')->references('id')->on('casd_sub_domains')->onDelete('set null');
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
        Schema::dropIfExists('casd_questions');
    }
}
