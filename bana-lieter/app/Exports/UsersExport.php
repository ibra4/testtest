<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromQuery, WithHeadings
{
    use Exportable;

    public function __construct(Request $request)
    {
        $this->name = $request->name;
        $this->email = $request->email;
    }

    public function query()
    {
        return User::select('id', 'name', 'email', 'created_at', 'updated_at')->where([
            'role' => 'admin',
            ['name', 'LIKE', "%$this->name%"],
            ['email', 'LIKE', "%$this->email%"],
        ])
            ->orderBy('created_at', 'DESC')
            ->orderBy('updated_at', 'DESC');
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Email',
            'Created At',
            'Updated At',
        ];
    }
}
