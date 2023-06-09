<?php

namespace Database\Factories;

use App\Models\Dorm;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->imageUrl(640, 480),
            'path' => $this->faker->imageUrl(640, 480),
            'dorm_id' => Dorm::inRandomOrder()->first()->id,
            'post_id' => Post::inRandomOrder()->first()->id,
        ];
    }
}
