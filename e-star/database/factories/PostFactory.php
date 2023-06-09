<?php

namespace Database\Factories;

use App\Models\Dorm;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'dorm_id' => Dorm::inRandomOrder()->first()->id,
            'room_type' => $this->faker->randomElement([Post::TYPE_SINGLE, Post::TYPE_DOUBLE, Post::TYPE_TRIPLE, Post::TYPE_QUAD]),
            'room_price' => $this->faker->numberBetween(1000, 5000),
            'review' => $this->faker->paragraph(),
            'room_rating' => $this->faker->numberBetween(1, 5),
            'bathroom_rating' => $this->faker->numberBetween(1, 5),
            'security_rating' => $this->faker->numberBetween(1, 5),
            'location_rating' => $this->faker->numberBetween(1, 5),
            'internet_rating' => $this->faker->numberBetween(1, 5),
        ];
    }
}
