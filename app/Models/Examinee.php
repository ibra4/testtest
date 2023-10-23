<?php

namespace App\Models;

use App\Models\Reports\LeiterReport;
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
        'name_en',
        'birthday',
        'gender',
        'country_id',
        'city_id',
        'admin_id',
        'examiner_notes',
        'created_by',
        'information_source',
        'school',
        'grade',
        'referral_source'
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
        switch ($currentUser->role) {
            case 'root':
            case 'sub_admin':
                $show = $this->created_by == $currentUser->id;
                break;
            case 'admin':
                $show = $this->admin_id == $currentUser->id;
                break;
            default:
                $show = false;
        }

        return $show ? $value : '*******';
    }

    public function report()
    {
        return $this->hasOne(LeiterReport::class, 'id', 'report_id');
    }

    public function leiterReports()
    {
        return $this->hasMany(LeiterReport::class, 'examinee_id', 'id');
    }

    public function abasExams()
    {
        return $this->hasMany(AbasExam::class, 'examinee_id', 'id');
    }

    public function casdExams()
    {
        return $this->hasMany(CasdExam::class, 'examinee_id', 'id');
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
