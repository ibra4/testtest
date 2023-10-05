<?php

namespace App\Models;

use App\Models\Traits\HasRoles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'avatar',
        'cv',
        'logo',
        'phone_number',
        'number_of_leiter_reports',
        'used_leiter_reports',
        'number_of_abas_reports',
        'used_abas_reports',
        'number_of_casd_reports',
        'used_casd_reports',
        'number_of_mpr_reports',
        'used_mpr_reports',
        'admin_id',
        'country_id',
        'city_id',
        'is_active',
        'gender',
        'role',
        'password',
        'expiration_date',
        'locale',
        'is_deleted'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'updated_at' => 'datetime:d/m/Y - H:i:s',
        'created_at' => 'datetime:d/m/Y - H:i:s',
    ];

    public function admin()
    {
        return $this->belongsTo(User::class);
    }

    public function subAdmins()
    {
        return $this->hasMany(User::class, 'admin_id', 'id');
    }

    public function getLocaleAttribute($locale)
    {
        return $locale ?? 'en';
    }

    public function notifications()
    {
        return $this->hasMany(UserNotification::class);
    }

    /**
     * @return bool
     */
    public function canImpersonate(): bool
    {
        return $this->hasRole('root');
    }

    /**
     * @return bool
     */
    public function canBeImpersonated()
    {
        return !$this->hasRole('root');
    }
}
