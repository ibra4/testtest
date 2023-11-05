<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CopyQuestionNumberToAbasSubDomainQuestion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $abasSubDomainQuestions = \App\Models\AbasSubDomainQuestion::all();

        foreach ($abasSubDomainQuestions as $abasSubDomainQuestion) {
            $abasSubDomainQuestion->update(['question_number' => $abasSubDomainQuestion->question->question_number]);
        }
    }
}
