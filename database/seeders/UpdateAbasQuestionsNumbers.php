<?php

namespace Database\Seeders;

use App\Models\AbasSubDomain;
use Illuminate\Database\Seeder;

class UpdateAbasQuestionsNumbers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (AbasSubDomain::all() as $subDomain) {
            $questions = $subDomain->questions()->orderBy('created_at', 'ASC')->get();
            foreach ($questions as $idx => $question) {
                $question->update(['question_number' => $idx + 1]);
            }
        }
    }
}
