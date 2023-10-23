<?php

use App\Enums\ExamineeInformationSourceEnum;
use App\Enums\ExamineeReferralSourceEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToExamineesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('examinees', function (Blueprint $table) {
            $table->enum('information_source', ExamineeInformationSourceEnum::getAllFields())->nullable();
            $table->enum('referral_source', ExamineeReferralSourceEnum::getAllFields())->nullable();
            $table->string('school')->nullable();
            $table->string('grade')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('examinees', function (Blueprint $table) {
            $table->dropColumn('information_source');
            $table->dropColumn('referral_source');
            $table->dropColumn('school');
            $table->dropColumn('grade');
        });
    }
}
