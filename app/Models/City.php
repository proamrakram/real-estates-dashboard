<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code'
    ];

    public function branches()
    {
        return $this->hasMany(Branch::class, 'city_id', 'id');
    }

    public function offers()
    {
        return $this->hasMany(Offer::class, 'city_id', 'id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'city_id', 'id');
    }

    public function customers()
    {
        return $this->hasMany(Customer::class, 'city_id', 'id');
    }

    public function scopeData($query)
    {
        return $query->select([
            'id',
            'name',
            'code'
        ]);
    }
}
