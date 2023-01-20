<?php

namespace App\Models;

use App\Models\Traits\HasRoles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, HasRoles, Notifiable;

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
        'phone_number',
        'number_of_reports',
        'used_reports',
        'admin_id',
        'country_id',
        'city_id',
        'is_active',
        'gender',
        'role',
        'password',
        'expiration_date',
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

    public function getRoleAttribute($value)
    {
        return $this->id === 1 ? 'root' : $value;
    }

    public function admin()
    {
        return $this->belongsTo(User::class);
    }

    public function subAdmins()
    {
        return $this->hasMany(User::class, 'admin_id', 'id');
    }
}
