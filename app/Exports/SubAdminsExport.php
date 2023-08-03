<?php

namespace App\Exports;

use App\Queries\SubAdminsQuery;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SubAdminsExport implements FromQuery, WithHeadings
{
    use Exportable;

    /**
     * subAdminQuery
     *
     * @var SubAdminsQuery
     */
    protected $subAdminQuery;

    public function __construct(Request $request, SubAdminsQuery $sbq)
    {
        $this->request = $request;
        $this->subAdminQuery = $sbq;
    }

    public function query()
    {
        return $this->subAdminQuery->get($this->request);
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Avatar',
            'Email',
            'Parent Admin ID',
            'Created At',
            'Updated At',
        ];
    }
}
