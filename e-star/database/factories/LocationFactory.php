<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->secondaryAddress(),
            'address' => $this->faker->streetName(),
            'barangay' => $this->faker->cityPrefix,
            'city' => $this->faker->city(),
            // 'province' => $this->faker->state(),
            // 'region' => $this->faker->state(),
            // 'zip_code' => $this->faker->postcode(),
            'longitude' => $this->faker->longitude(),
            'latitude' => $this->faker->latitude(),
        ];
    }
}
