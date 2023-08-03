<?php

namespace App\Exports;

use App\Queries\LeiterRecordsQuery;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LeiterRecordsExport implements FromCollection, WithHeadings
{
    use Exportable;

    /**
     * @var string
     */
    private $type;

    /**
     * leiterRecordQuery
     *
     * @var LeiterRecordsQuery
     */
    protected $leiterRecordQuery;

    public function __construct(Request $request, LeiterRecordsQuery $lrbq, $type)
    {
        $this->request = $request;
        $this->leiterRecordQuery = $lrbq;
        $this->type = $type;
    }

    public function collection()
    {
        return $this->leiterRecordQuery->get($this->request, $this->type)
        ->get(['scaled_score', 'value', 'min_age', 'max_age'])->transform(function($i) {
            unset($i->_id);
            return $i;
        });
    }

    public function headings(): array
    {
        return [
            'Scaled Score',
            'Value',
            'Min Age',
            'Max Age'
        ];
    }
}
