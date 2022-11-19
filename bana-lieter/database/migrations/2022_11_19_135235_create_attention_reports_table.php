<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttentionReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attention_reports', function (Blueprint $table) {
            $table->id();
            $table->integer('attention_sustained');
            $table->integer('nonverbal_stroop_congruent_correct');
            $table->integer('nonverbal_stroop_incongruent_correct');
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
        Schema::dropIfExists('attention_reports');
    }
}
