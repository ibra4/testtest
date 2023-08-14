<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtraColumnsToReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reports', function (Blueprint $table) {
            $table->date('application_date')->default(now());
            $table->string('examiner_notes')->nullable('');
            $table->unsignedBigInteger('examinee_id')->default(1);
            $table->unsignedBigInteger('created_by')->default(1);
            $table->foreign('examinee_id')->references('id')->on('examinees')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
