<?php

namespace App\Models\Reports;

use App\Models\interfaces\SubReportInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportMemoryBattery extends Model
{
    use HasFactory;

    protected $fillable = [
        'forward_memory',
        'reverse_memory',
        'file_en',
        'file_ar'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'updated_at' => 'datetime:d/m/Y - H:i:s',
        'created_at' => 'datetime:d/m/Y - H:i:s',
    ];
}
