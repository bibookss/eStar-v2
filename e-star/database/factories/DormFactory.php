<?php

namespace Database\Factories;

use App\Models\Dorm;
use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

class DormFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'location_id' => Location::inRandomOrder()->first()->id,            
            'type' -> $this->faker->randomElement([Dorm::TYPE_MEN, Dorm::TYPE_WOMEN, Dorm::TYPE_MIXED]),
            'min_price' => $this->faker->numberBetween(1000, 5000),
            'max_price' => $this->faker->numberBetween(5000, 10000),
            'room_capacity' => $this->faker->numberBetween(1, 4),
            'has_wifi' => $this->faker->boolean(),
            'has_kitchen' => $this->faker->boolean(),
            'has_parking' => $this->faker->boolean(),
            'has_own_bathroom' => $this->faker->boolean(),
            'is_osa_recommended' => $this->faker->boolean(),
        ];
    }
}
