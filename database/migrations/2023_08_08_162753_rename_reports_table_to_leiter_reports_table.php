<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class RenameReportsTableToLeiterReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('reports')) {
            foreach (DB::table('examinees')->get() as $examinee) {
                DB::beginTransaction();
                try {
                    $date = $examinee->application_date ?? now();
                    DB::table('reports')->where('id', $examinee->report_id)->update([
                        'application_date' => $date,
                        'examinee_id' => $examinee->id,
                        'created_by' => $examinee->created_by,
                        'examiner_notes' => $examinee->examiner_notes,
                    ]);
                    DB::commit();
                } catch (Throwable $th) {
                    DB::rollBack();
                }
            }
            Schema::rename('reports', 'leiter_reports');
        }
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
