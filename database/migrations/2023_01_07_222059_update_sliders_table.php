<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sliders', function ($table) {
            $table->string('title')->nullable()->change();
            $table->text('description')->nullable()->change();
            // New one
            $table->text('link')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sliders', function ($table) {
            $table->string('title')->change();
            $table->text('description')->change();
            $table->dropColumn('link');
        });
    }
}
