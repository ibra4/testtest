<?php

namespace App\Models;

use App\Models\Reports\LeiterReport;
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
        'gender',
        'country_id',
        'city_id',
        'admin_id',
        'examiner_notes',
        'created_by'
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

    public function getGenderAttribute($value)
    {
        return $value ? "Male" : "Female";
    }

    public function getNameAttribute($value)
    {
        $currentUser = request()->user();
        if ($currentUser->hasRole('root')) {
            return $value;
        }
        if ($currentUser->hasRole('admin')) {
            $allowed = $currentUser->subAdmins->pluck('id')->toArray() ?? [];
        }
        $allowed[] = $currentUser->id;

        return in_array($this->center->id, $allowed) ? $value : "*******";
    }

    public function report()
    {
        return $this->hasOne(LeiterReport::class, 'id', 'report_id');
    }

    public function leiterReports()
    {
        return $this->hasMany(LeiterReport::class, 'examinee_id', 'id');
    }

    public function center()
    {
        return $this->belongsTo(User::class, 'admin_id', 'id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function getLocationAttribute()
    {
        $location = $this->country->name;

        if ($this->city) {
            $location .= ' - ' . $this->city->name;
        }

        return $location;
    }
}
