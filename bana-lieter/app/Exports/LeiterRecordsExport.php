<?php

namespace App\Exports;

use App\Queries\LeiterRecordsQuery;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LeiterRecordsExport implements FromQuery, WithHeadings
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

    public function query()
    {
        return $this->leiterRecordQuery->get($this->request, $this->type);
    }

    public function headings(): array
    {
        return [
            'ID',
            'Scaled Score',
            'Value',
            'Min Age',
            'Max Age'
        ];
    }
}
