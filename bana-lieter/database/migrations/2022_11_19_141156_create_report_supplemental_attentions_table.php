<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportSupplementalAttentionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_supplemental_attentions', function (Blueprint $table) {
            $table->id();
            $table->integer('attention_sustained_errors');
            $table->integer('attention_divided_correct');
            $table->integer('attention_divided_incorrect');
            $table->integer('nonverbal_stroop_congruent_incorrect');
            $table->integer('nonverbal_stroop_incongruent_incorrect');
            $table->string('file_en')->nullable();
            $table->string('file_ar')->nullable();
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
        Schema::dropIfExists('report_supplemental_attentions');
    }
}
