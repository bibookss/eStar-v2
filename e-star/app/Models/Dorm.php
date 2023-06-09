<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Image;
use App\Models\School;
use App\Models\Location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    public function location() : BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    public function posts() : HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function images() : HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function schools() : BelongsToMany
    {
        return $this->belongsToMany(School::class, 'school_dorms', 'dorm_id', 'school_id');    }

}
