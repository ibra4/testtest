<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCognitiveSubtestsReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cognitive_subtests_reports', function (Blueprint $table) {
            $table->id();
            $table->integer('figure_ground');
            $table->integer('form_completion');
            $table->integer('classification_analogies');
            $table->integer('sequential_order');
            $table->integer('visual_patterns');
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
        Schema::dropIfExists('cognitive_subtests_reports');
    }
}
