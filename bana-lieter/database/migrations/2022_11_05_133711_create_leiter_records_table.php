<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeiterRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leiter_records', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->integer('min_age');
            $table->integer('max_age');
            $table->integer('value');
            $table->integer('scaled_score');
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
        Schema::dropIfExists('leiter_records');
    }
}
