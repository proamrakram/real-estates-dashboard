<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Neighborhood extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_id',
        'name',
    ];

    public function offers()
    {
        return $this->hasMany(Offer::class, 'neighborhood_id', 'id');
    }

    public function scopeData($query)
    {
        return $query->select([
            'id',
            'city_id',
            'name',
        ]);
    }
}
