<?php

namespace App\Models\Reports;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemoryBatteryReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'forward_memory',
        'reverse_memory'
    ];
}
