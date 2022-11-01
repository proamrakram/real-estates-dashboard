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
        'city_id'
    ];

    public function city()
    {
        return $this->hasOne(City::class, 'id');
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
            'city_id'
        ]);
    }
}
