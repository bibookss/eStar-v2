<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dorm extends Model
{
    use HasFactory;

    protected $fillable = [
        'location_id',
        'name',
        'type',
        'room_capacity',
        'has_wifi',
        'has_kitchen',
        'has_parking',
        'has_own_bathroom',
        'is_osa_recommended',
    ];

}
