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

    public function scopeData($query)
    {
        return $query->select([
            'id',
            'name',
            'code'
        ]);
    }
}
