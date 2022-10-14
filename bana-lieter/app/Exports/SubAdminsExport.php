<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SubAdminsExport implements FromQuery, WithHeadings
{
    use Exportable;

    public function __construct(Request $request)
    {
        $this->name = $request->name;
        $this->email = $request->email;
        $this->admin_id = $request->admin_id;
    }

    public function query()
    {
        $query = User::select('id', 'name', 'email', 'admin_id', 'created_at', 'updated_at')->where([
            'role' => 'sub_admin',
            ['name', 'LIKE', "%$this->name%"],
            ['email', 'LIKE', "%$this->email%"],
        ])
            ->orderBy('created_at', 'DESC')
            ->orderBy('updated_at', 'DESC');

        if (!request()->user()->can('root')) {
            $query->where('admin_id', request()->user()->id);
        } elseif ($this->admin_id) {
            $query->where('admin_id', $this->admin_id);
        }

        return $query;
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Email',
            'Parent Admin ID',
            'Created At',
            'Updated At',
        ];
    }
}
