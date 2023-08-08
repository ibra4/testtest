<?php

namespace App\Exports;

use App\Queries\ExamineesQuery;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExamineesExport implements FromQuery, WithHeadings
{
    use Exportable;

    private Request $request;
    
    /**
     * examineesQuery
     *
     * @var ExamineesQuery
     */
    protected $examineesQuery;

    public function __construct(Request $request, ExamineesQuery $sbq)
    {
        $this->request = $request;
        $this->examineesQuery = $sbq;
    }

    public function query()
    {
        return $this->examineesQuery->get($this->request);
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Birthday',
            'Admin',
            'Admin ID',
            'Gender',
            'Created At',
            'Updated At',
            // 'Application Date',
            // 'Figure Ground',
            // 'Form Completion',
            // 'Classification Analogies',
            // 'Sequential Order',
            // 'Visual Patterns',
            // 'Forward Memory',
            // 'Reverse Memory',
            // 'Attention Sustained',
            // 'Nonverbal Stroop Congruent Correct',
            // 'Nonverbal Stroop Incongruent Correct',
            // 'Attention',
            // 'Organization/Impulse Control',
            // 'Activity Level',
            // 'Sociability',
            // 'Energy and Feelings',
            // 'Regulation',
            // 'Anxiety',
            // 'Sensory Reaction'
        ];
    }
}
