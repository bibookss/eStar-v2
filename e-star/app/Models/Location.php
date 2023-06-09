<?php

namespace App\Models;

use App\Models\Dorm;
use App\Models\School;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'address',
        'barangay',
        'city',
        // 'province',
        // 'region',
        // 'zip_code'
        'longitude',
        'latitude'
    ];

    public function dorms() :  HasMany
    {
        return $this->hasMany(Dorm::class);
    }

    public function schools() : HasMany
    {
        return $this->hasMany(School::class);
    }
}
