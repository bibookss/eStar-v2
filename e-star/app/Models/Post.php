<?php

namespace App\Models;

use App\Models\Dorm;
use App\Models\User;
use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_type',
        'room_price',
        'review',
        'room_rating',
        'security_rating',
        'bathroom_rating',
        'internet_rating',
        'location_rating'
    ];

    protected $attributes=[
        'room_rating' => 0,
        'security_rating' => 0,
        'bathroom_rating' => 0,
        'internet_rating' => 0,
        'location_rating' => 0,
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function dorm() : BelongsTo
    {
        return $this->belongsTo(Dorm::class);
    }

    public function images() : HasMany
    {
        return $this->hasMany(Image::class);
    }
    
}
