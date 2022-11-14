<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'user_status',
        // 'email_verified_at',
        'user_type',
        // 'is_admin',
        // 'is_office',
        // 'is_finance',
        // 'is_employee',
        // 'is_monitor',
        'branches_ids',
        'advertiser_number'
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
        'branches_ids' => 'array',
    ];

    public function permissions()
    {
        return $this->hasOne(Permission::class, 'user_id', 'id');
    }

    public function offers()
    {
        return $this->hasMany(Offer::class, 'user_id', 'id');
    }

    public function mediators()
    {
        return $this->hasMany(Mediator::class, 'user_id', 'id');
    }

    public function customers()
    {
        return $this->hasMany(Customer::class, 'user_id', 'id');
    }

    public function scopeData($query)
    {
        return $query->select([
            'id',
            'name',
            'phone',
            'email',
            'user_status',
            'user_type',
            // 'is_admin',
            // 'is_office',
            // 'is_finance',
            // 'is_employee',
            // 'is_monitor',
            'branches_ids',
            'advertiser_number'
        ]);
    }
}
