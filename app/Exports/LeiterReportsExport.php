<?php

namespace App\Exports;

use App\Queries\ExamineesQuery;
use App\Queries\LeiterReportsQuery;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LeiterReportsExport implements FromQuery, WithHeadings
{
    use Exportable;

    private Request $request;
    
    /**
     * @var ExamineesQuery
     */
    protected $leiterReportsQuery;

    public function __construct(Request $request, LeiterReportsQuery $leiterReportsQuery)
    {
        $this->request = $request;
        $this->leiterReportsQuery = $leiterReportsQuery;
    }

    public function query()
    {
        return $this->leiterReportsQuery->get($this->request);
    }

    public function headings(): array
    {
        return [
            'Report ID',
            'Examinee ID',
            'Examinee Name',
            'Examiner',
            'Admin',
            'Created At',
            'Figure Ground',
            'Form Completion',
            'Classification Analogies',
            'Sequential Order',
            'Visual Patterns',
            'Forward Memory',
            'Reverse Memory',
            'Attention Sustained',
            'Nonverbal Stroop Congruent Correct',
            'Nonverbal Stroop Incongruent Correct',
            'Attention',
            'Organization/Impulse Control',
            'Activity Level',
            'Sociability',
            'Energy and Feelings',
            'Regulation',
            'Anxiety',
            'Sensory Reaction'
        ];
    }
}
