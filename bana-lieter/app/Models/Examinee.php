<?php

namespace App\Models;

use App\Models\Reports\Report;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examinee extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'birthday',
        'application_date',
        'gender',
        'country_id',
        'city_id',
        'admin_id',
        'examiner_notes',
        'created_by',
        'report_id'
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

    public function getAgeAttribute($value)
    {
        $stop = new Carbon($value);
        $diff = $stop->diff(Carbon::now());
        $years = $diff->format("%y");
        $months = $diff->format("%m");
        return $years * 12 + $months;
    }

    public function getGenderAttribute($value)
    {
        return $value ? "Male" : "Female";
    }

    public function report()
    {
        return $this->hasOne(Report::class, 'id', 'report_id');
    }
}
