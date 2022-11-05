<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LieterRecordIndex extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mongodb')->table('tables', function (Blueprint $collection) {
            $collection->index([
                "scaled_score" => 1,
                "type" => 1,
                'min_age' => 1,
                'max_age' => 1,
            ], 'default-ndx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mongodb')->table('tables', function (Blueprint $collection) {
            $collection->dropIndex(['default-ndx']);
        });
    }
}
