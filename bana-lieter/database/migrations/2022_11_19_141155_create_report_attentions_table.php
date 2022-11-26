<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportAttentionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_attentions', function (Blueprint $table) {
            $table->id();
            $table->integer('attention_sustained');
            $table->integer('nonverbal_stroop_congruent_correct');
            $table->integer('nonverbal_stroop_incongruent_correct');
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
        Schema::dropIfExists('report_attentions');
    }
}
