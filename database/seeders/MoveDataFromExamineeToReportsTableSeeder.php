<?php

namespace Database\Seeders;

use App\Models\Examinee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Throwable;

class MoveDataFromExamineeToReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();

        /** @var Examinee $examinee */
        foreach (Examinee::all() as $examinee) {
            $date = $examinee->application_date ?? now();
            $report = $examinee->report;
            try {
                $report->update([
                    'application_date' => $date,
                    'examinee_id' => $examinee->id,
                    'created_by' => $examinee->created_by,
                ]);
                $this->command->info(sprintf('Report %d, updated successfully', $report->id));
            } catch (Throwable $th) {
                $this->command->error(sprintf('Error while updating the report %d, errorMsg: %s', $report->id, $th->getMessage()));
            }
        }
    }
}
