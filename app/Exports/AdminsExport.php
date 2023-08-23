<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AdminsExport implements FromQuery, WithHeadings
{
    use Exportable;

    public function __construct(Request $request)
    {
        $this->name = $request->name;
        $this->email = $request->email;
    }

    public function query()
    {
        return User::select(
            'id',
            'name',
            'email',
            DB::raw('number_of_leiter_reports + number_of_casd_reports + number_of_mpr_reports + number_of_abas_reports as number_of_total_reports'),
            'created_at',
            'updated_at'
        )->where([
            'role' => 'admin',
            ['name', 'LIKE', "%$this->name%"],
            ['email', 'LIKE', "%$this->email%"],
        ])
            ->where('is_deleted', false)
            ->orderBy('created_at', 'DESC')
            ->orderBy('updated_at', 'DESC');
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Email',
            'Number of records',
            'Created At',
            'Updated At',
        ];
    }
}
