<?php

namespace Database\Seeders;

use App\Models\Dorm;
use App\Models\Post;
use App\Models\User;
use App\Models\Image;
use App\Models\School;
use App\Models\Location;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->times(50)->create();
        Location::factory()->times(50)->create();
        School::factory()->times(10)->create();
        Dorm::factory()->times(20)->create();
        Post::factory()->times(100)->create();
        Image::factory()->times(100)->create();
    }
}
