<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'status',
        'city_id'
    ];

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }

    public function offers()
    {
        return $this->hasMany(Offer::class, 'branch_id', 'id');
    }

    public function order()
    {
        return $this->hasMany(Order::class, 'branch_id', 'id');
    }

    public function getCityNameAttribute()
    {
        $city = $this->city;
        if ($city) {
            return $this->city->name;
        }
    }

    public function scopeData($query)
    {
        return $query->select([
            'id',
            'name',
            'code',
            'status',
            'city_id'
        ]);
    }
}
