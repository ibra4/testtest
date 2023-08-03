<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportCognitiveSubtestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_cognitive_subtests', function (Blueprint $table) {
            $table->id();
            $table->integer('figure_ground');
            $table->integer('form_completion');
            $table->integer('classification_analogies');
            $table->integer('sequential_order');
            $table->integer('visual_patterns');
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
        Schema::dropIfExists('report_cognitive_subtests');
    }
}
